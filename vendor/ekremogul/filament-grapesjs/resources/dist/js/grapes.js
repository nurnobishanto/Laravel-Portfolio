(()=>{var t,e={178:()=>{document.addEventListener("alpine:init",(function(){Alpine.data("grapesjs",(function(t){var e=t.state,n=(t.statePath,t.readOnly,t.tools),a=t.minHeight;return{instance:null,state:e,tools:n,init:function(){var t=this;this.instance=grapesjs.init({height:a+"px",container:".filament-grapesjs .grapesjs-wrapper",showOffsets:!0,fromElement:!0,noticeOnUnload:!1,storageManager:!1,loadHtml:e,plugins:["grapesjs-tailwind"]}),this.instance.on("update",(function(e){var n=t.instance.getHtml({cleanId:!0}).match(/<body\b[^>]*>([\s\S]*?)<\/body>/);t.state=n?n[1]:t.instance.getHtml()}))}}}))}))},697:()=>{}},n={};function a(t){var r=n[t];if(void 0!==r)return r.exports;var i=n[t]={exports:{}};return e[t](i,i.exports,a),i.exports}a.m=e,t=[],a.O=(e,n,r,i)=>{if(!n){var s=1/0;for(c=0;c<t.length;c++){for(var[n,r,i]=t[c],o=!0,l=0;l<n.length;l++)(!1&i||s>=i)&&Object.keys(a.O).every((t=>a.O[t](n[l])))?n.splice(l--,1):(o=!1,i<s&&(s=i));if(o){t.splice(c--,1);var p=r();void 0!==p&&(e=p)}}return e}i=i||0;for(var c=t.length;c>0&&t[c-1][2]>i;c--)t[c]=t[c-1];t[c]=[n,r,i]},a.o=(t,e)=>Object.prototype.hasOwnProperty.call(t,e),(()=>{var t={278:0,447:0};a.O.j=e=>0===t[e];var e=(e,n)=>{var r,i,[s,o,l]=n,p=0;if(s.some((e=>0!==t[e]))){for(r in o)a.o(o,r)&&(a.m[r]=o[r]);if(l)var c=l(a)}for(e&&e(n);p<s.length;p++)i=s[p],a.o(t,i)&&t[i]&&t[i][0](),t[i]=0;return a.O(c)},n=self.webpackChunk=self.webpackChunk||[];n.forEach(e.bind(null,0)),n.push=e.bind(null,n.push.bind(n))})(),a.O(void 0,[447],(()=>a(178)));var r=a.O(void 0,[447],(()=>a(697)));r=a.O(r)})();