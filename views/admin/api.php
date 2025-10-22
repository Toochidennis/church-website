<?php
header('Content-Type: application/json');
$action = $_GET['action'] ?? '';
$root = realpath(__DIR__ . '/../');
$dataDir = $root . '/data';

function readJson($file)
{
  return json_decode(file_get_contents($file), true);
}
function writeJson($file, $data)
{
  file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
}

switch ($action) {
  case 'list':
    echo json_encode([
      'news' => readJson($dataDir . '/news.json'),
      'events' => readJson($dataDir . '/events.json'),
      'parishes' => readJson($dataDir . '/parishes.json'),
      'departments' => readJson($dataDir . '/departments.json'),
      'gallery' => readJson($dataDir . '/gallery.json'),
    ]);
    break;
  case 'save':
    $payload = json_decode(file_get_contents('php://input'), true);
    $section = $payload['section'];
    $file = $dataDir . '/' . $section . '.json';
    $items = readJson($file);
    if (empty($payload['item']['id'])) {
      $payload['item']['id'] = max(array_column($items, 'id')) + 1;
      $items[] = $payload['item'];
    } else {
      foreach ($items as &$it) if ($it['id'] == $payload['item']['id']) {
        $it = $payload['item'];
      }
    }
    writeJson($file, $items);
    echo json_encode(['ok' => true]);
    break;
  case 'delete':
    $payload = json_decode(file_get_contents('php://input'), true);
    $section = $payload['section'];
    $file = $dataDir . '/' . $section . '.json';
    $items = readJson($file);
    $items = array_values(array_filter($items, fn($it) => $it['id'] != $payload['id']));
    writeJson($file, $items);
    echo json_encode(['ok' => true]);
    break;
  case 'contact':
    $body = json_decode(file_get_contents('php://input'), true);
    // In production, send email. For demo, append to a log.
    file_put_contents($dataDir . '/contact.log', date('c') . " " . json_encode($body) . PHP_EOL, FILE_APPEND);
    echo json_encode(['ok' => true]);
    break;
  case 'recordDonation':
    $body = json_decode(file_get_contents('php://input'), true);
    file_put_contents($dataDir . '/donations.log', date('c') . " " . json_encode($body) . PHP_EOL, FILE_APPEND);
    echo json_encode(['ok' => true]);
    break;
  default:
    http_response_code(400);
    echo json_encode(['error' => 'Unknown action']);
}
