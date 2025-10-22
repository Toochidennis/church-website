window.addEventListener('DOMContentLoaded', () => {
  // IntersectionObserver for smooth reveals
  const io = new IntersectionObserver((entries)=>{
    entries.forEach(e=>{
      if(e.isIntersecting){ e.target.classList.add('visible'); io.unobserve(e.target); }
    });
  }, {threshold: 0.15});
  document.querySelectorAll('.reveal').forEach(el=>io.observe(el));
});

// Alpine helpers
function carousel(){
  return {
    index: 0,
    items: [],
    async init(){
      const res = await fetch('/data/news.json');
      this.items = await res.json();
      setInterval(()=> this.next(), 5000);
    },
    next(){ this.index = (this.index + 1) % this.items.length; },
    prev(){ this.index = (this.index - 1 + this.items.length) % this.items.length; }
  }
}

function parishDirectory(seed){
  return {
    q: '', deanery: '',
    deaneries: [...new Set(seed.map(p=>p.deanery))],
    get filtered(){
      return seed.filter(p => (!this.deanery || p.deanery===this.deanery) && (!this.q || p.name.toLowerCase().includes(this.q.toLowerCase())));
    }
  }
}

function adminPanel(){
  return {
    tabs: ['News','Events','Parishes','Departments','Gallery'],
    current: 'News',
    data: {news:[],events:[],parishes:[],departments:[],gallery:[]},
    modal: {open:false, title:'', fields:[], section:''},
    form: {},
    async init(){
      const res = await fetch('/admin/api.php?action=list');
      this.data = await res.json();
    },
    openModal(section){
      this.modal = {open:true, section, title: 'New ' + section.charAt(0).toUpperCase()+section.slice(1), fields: this.fieldsFor(section)};
      this.form = {};
    },
    edit(section, item){
      this.modal = {open:true, section, title: 'Edit ' + (item.title || item.name || 'Item'), fields: this.fieldsFor(section)};
      this.form = JSON.parse(JSON.stringify(item));
    },
    fieldsFor(section){
      switch(section){
        case 'news': return [{name:'title',label:'Title',type:'text'},{name:'date',label:'Date',type:'date'},{name:'excerpt',label:'Excerpt',type:'textarea'},{name:'content',label:'Content',type:'textarea'},{name:'image',label:'Image Path (assets/img/...)',type:'text'}];
        case 'events': return [{name:'title',label:'Title',type:'text'},{name:'date',label:'Date',type:'date'},{name:'time',label:'Time',type:'text'},{name:'location',label:'Location',type:'text'},{name:'description',label:'Description',type:'textarea'}];
        case 'parishes': return [{name:'name',label:'Name',type:'text'},{name:'deanery',label:'Deanery',type:'text'},{name:'address',label:'Address',type:'text'},{name:'lat',label:'Latitude',type:'number'},{name:'lng',label:'Longitude',type:'number'},{name:'priest',label:'Priest',type:'text'},{name:'phone',label:'Phone',type:'text'}];
        case 'departments': return [{name:'name',label:'Name',type:'text'},{name:'lead',label:'Lead',type:'text'},{name:'email',label:'Email',type:'text'},{name:'phone',label:'Phone',type:'text'},{name:'description',label:'Description',type:'textarea'},{name:'icon',label:'Icon name',type:'text'}];
        case 'gallery': return [{name:'src',label:'Image Path',type:'text'},{name:'alt',label:'Alt',type:'text'},{name:'caption',label:'Caption',type:'text'}];
        default: return [];
      }
    },
    async save(){
      const r = await fetch('/admin/api.php?action=save', {method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({section:this.modal.section, item:this.form})});
      if(r.ok){ this.init(); this.modal.open=false; }
    },
    async destroy(section, id){
      if(!confirm('Delete this item?')) return;
      const r = await fetch('/admin/api.php?action=delete', {method:'POST', headers:{'Content-Type':'application/json'}, body: JSON.stringify({section, id})});
      if(r.ok) this.init();
    }
  }
}
