import{S as $,i as x,s as ee,h as m,j as T,a as S,C as pe,o as X,k as a,b as L,l as f,B as O,p as U,f as I,q as le,F as _e,g as P,X as me,z as ge,G as ve,I as de,n as E,J as he,K as ae,L as ie,v as be,c as V,m as W,w as ke,x as we,y as ye,t as Q,d as R,e as Z}from"./index-60ba6ea9.js";import{B as ze}from"./bubbles-f9ed80be.js";class J{constructor(e,t,i=!1){this.label=t,this.link=e,this.external=i}}const Be=[new J("./about","navigation.about"),new J("./services","navigation.services"),new J("./references","navigation.references"),new J("./partnerships","navigation.partnerships"),new J("./career","navigation.career"),new J("./contact","navigation.contact")];class K{constructor(e,t,i){this.name=e,this.icon=t,this.url=i}}const je=[new K("Clutch","clutch icon","https://clutch.co/profile/blumilk-0"),new K("Github","github icon","https://github.com/blumilksoftware"),new K("LinkedIn","linkedin icon","https://linkedin.com/company/blumilksoftware"),new K("Facebook","facebook icon","https://facebook.com/blumilksoftware"),new K("Instagram","instagram icon","https://instagram.com/blumilksoftware"),new K("Twitter","twitter icon","https://twitter.com/blumilksoftware")];const{window:Le}=de;function se(l,e,t){const i=l.slice();return i[7]=e[t],i}function ne(l,e,t){const i=l.slice();return i[7]=e[t],i}function Ie(l){let e,t=l[2](l[7].label)+"",i,n,s;return{c(){e=m("a"),i=T(t),a(e,"href",n=l[7].link),a(e,"target","_blank"),a(e,"data-cy",s=l[2](l[7].label))},m(o,c){L(o,e,c),f(e,i)},p(o,c){c&6&&t!==(t=o[2](o[7].label)+"")&&E(i,t),c&2&&n!==(n=o[7].link)&&a(e,"href",n),c&6&&s!==(s=o[2](o[7].label))&&a(e,"data-cy",s)},d(o){o&&I(e)}}}function Ce(l){let e,t=l[2](l[7].label)+"",i,n,s;return{c(){e=m("a"),i=T(t),a(e,"href",n=l[3](l[7].link)),a(e,"data-cy",s=l[2](l[7].label)),a(e,"class","underline-offset-2"),ae(e,"underline",l[4](l[7].link))},m(o,c){L(o,e,c),f(e,i)},p(o,c){c&6&&t!==(t=o[2](o[7].label)+"")&&E(i,t),c&10&&n!==(n=o[3](o[7].link))&&a(e,"href",n),c&6&&s!==(s=o[2](o[7].label))&&a(e,"data-cy",s),c&18&&ae(e,"underline",o[4](o[7].link))},d(o){o&&I(e)}}}function oe(l){let e;function t(s,o){return s[7].external?Ie:Ce}let i=t(l),n=i(l);return{c(){e=m("div"),n.c(),a(e,"class","lowercase ml-8")},m(s,o){L(s,e,o),n.m(e,null)},p(s,o){i===(i=t(s))&&n?n.p(s,o):(n.d(1),n=i(s),n&&(n.c(),n.m(e,null)))},d(s){s&&I(e),n.d()}}}function re(l){let e,t,i,n,s,o,c,b,v,u,r,g,M,z,N=l[2]("locale.language")+"",Y,F,G,A=l[1],k=[];for(let h=0;h<A.length;h+=1)k[h]=fe(se(l,A,h));return{c(){e=m("div"),t=m("div"),i=m("a"),n=m("img"),c=S();for(let h=0;h<k.length;h+=1)k[h].c();b=S(),v=m("div"),u=m("img"),z=S(),Y=T(N),X(n.src,s="/logo.svg")||a(n,"src",s),a(n,"alt","Blumilk"),a(n,"class","w-24"),a(i,"href",o=l[3]("./")),a(i,"class","mx-auto mb-12"),a(u,"class","w-6 mx-2"),X(u.src,r=l[2]("locale.flag"))||a(u,"src",r),a(u,"alt",g=l[2]("locale.language")),a(u,"title",M=l[2]("locale.language")),a(v,"class","flex text-center p-2 hover:bg-blue-400 hover:bg-opacity-25 items-center justify-center cursor-pointer"),a(t,"class","flex flex-col w-full text-center"),a(e,"class","md:hidden fixed w-full h-full flex flex-col justify-center items-center bg-white bg-opacity-95 p-4 z-30")},m(h,B){L(h,e,B),f(e,t),f(t,i),f(i,n),f(t,c);for(let w=0;w<k.length;w+=1)k[w]&&k[w].m(t,null);f(t,b),f(t,v),f(v,u),f(v,z),f(v,Y),F||(G=[O(v,"click",l[5]),O(e,"click",l[6])],F=!0)},p(h,B){if(B&8&&o!==(o=h[3]("./"))&&a(i,"href",o),B&14){A=h[1];let w;for(w=0;w<A.length;w+=1){const H=se(h,A,w);k[w]?k[w].p(H,B):(k[w]=fe(H),k[w].c(),k[w].m(t,b))}for(;w<k.length;w+=1)k[w].d(1);k.length=A.length}B&4&&!X(u.src,r=h[2]("locale.flag"))&&a(u,"src",r),B&4&&g!==(g=h[2]("locale.language"))&&a(u,"alt",g),B&4&&M!==(M=h[2]("locale.language"))&&a(u,"title",M),B&4&&N!==(N=h[2]("locale.language")+"")&&E(Y,N)},d(h){h&&I(e),le(k,h),F=!1,_e(G)}}}function Se(l){let e,t=l[2](l[7].label)+"",i,n;return{c(){e=m("a"),i=T(t),a(e,"href",n=l[7].link),a(e,"target","_blank")},m(s,o){L(s,e,o),f(e,i)},p(s,o){o&6&&t!==(t=s[2](s[7].label)+"")&&E(i,t),o&2&&n!==(n=s[7].link)&&a(e,"href",n)},d(s){s&&I(e)}}}function Fe(l){let e,t=l[2](l[7].label)+"",i,n;return{c(){e=m("a"),i=T(t),a(e,"href",n=l[3](l[7].link))},m(s,o){L(s,e,o),f(e,i)},p(s,o){o&6&&t!==(t=s[2](s[7].label)+"")&&E(i,t),o&10&&n!==(n=s[3](s[7].link))&&a(e,"href",n)},d(s){s&&I(e)}}}function fe(l){let e;function t(s,o){return s[7].external?Se:Fe}let i=t(l),n=i(l);return{c(){e=m("div"),n.c(),a(e,"class","lowercase text-center p-2 hover:bg-blue-400 hover:bg-opacity-25")},m(s,o){L(s,e,o),n.m(e,null)},p(s,o){i===(i=t(s))&&n?n.p(s,o):(n.d(1),n=i(s),n&&(n.c(),n.m(e,null)))},d(s){s&&I(e),n.d()}}}function qe(l){let e,t,i,n,s,o,c,b,v,u,r,g,M,z,N,Y,F,G,A,k,h,B,w,H,D,j,d=l[1],y=[];for(let _=0;_<d.length;_+=1)y[_]=oe(ne(l,d,_));let p=l[0]&&re(l);return{c(){e=m("div"),t=m("div"),i=m("div"),n=m("a"),s=m("img"),c=T(`
                Blumilk
                `),b=m("span"),b.textContent="_",u=S(),r=m("div");for(let _=0;_<y.length;_+=1)y[_].c();g=S(),M=m("div"),z=m("img"),A=S(),k=m("div"),k.innerHTML='<i class="large bars icon" data-cy="menu-bars"></i>',h=S(),B=m("div"),w=S(),p&&p.c(),H=pe(),X(s.src,o="/logo.svg")||a(s,"src",o),a(s,"alt","Blumilk"),a(s,"class","w-12 mr-3"),a(b,"id","cursor"),a(b,"class","text-brand svelte-t822rh"),a(n,"href",v=l[3]("./")),a(n,"class","flex lowercase font-bold items-center"),a(i,"class","text-2xl"),a(z,"id","i18n-switch"),a(z,"class","w-6 cursor-pointer"),X(z.src,N=l[2]("locale.flag"))||a(z,"src",N),a(z,"data-cy",Y=l[2]("locale.language")),a(z,"alt",F=l[2]("locale.language")),a(z,"title",G=l[2]("locale.language")),a(M,"class","ml-8"),a(r,"class","flex-1 justify-end items-center hidden md:flex"),a(k,"class","flex-grow cursor-pointer text-right md:hidden"),a(t,"class","md:container mx-auto flex items-center px-6"),a(e,"id","navigation"),a(e,"class","fixed left-0 right-0 py-4 z-50 bg-background duration-300"),a(B,"class","mb-48")},m(_,q){L(_,e,q),f(e,t),f(t,i),f(i,n),f(n,s),f(n,c),f(n,b),f(t,u),f(t,r);for(let C=0;C<y.length;C+=1)y[C]&&y[C].m(r,null);f(r,g),f(r,M),f(M,z),f(t,A),f(t,k),L(_,h,q),L(_,B,q),L(_,w,q),p&&p.m(_,q),L(_,H,q),D||(j=[O(Le,"scroll",Me),O(z,"click",l[5]),O(k,"click",l[6])],D=!0)},p(_,[q]){if(q&8&&v!==(v=_[3]("./"))&&a(n,"href",v),q&30){d=_[1];let C;for(C=0;C<d.length;C+=1){const te=ne(_,d,C);y[C]?y[C].p(te,q):(y[C]=oe(te),y[C].c(),y[C].m(r,g))}for(;C<y.length;C+=1)y[C].d(1);y.length=d.length}q&4&&!X(z.src,N=_[2]("locale.flag"))&&a(z,"src",N),q&4&&Y!==(Y=_[2]("locale.language"))&&a(z,"data-cy",Y),q&4&&F!==(F=_[2]("locale.language"))&&a(z,"alt",F),q&4&&G!==(G=_[2]("locale.language"))&&a(z,"title",G),_[0]?p?p.p(_,q):(p=re(_),p.c(),p.m(H.parentNode,H)):p&&(p.d(1),p=null)},i:U,o:U,d(_){_&&I(e),le(y,_),_&&I(h),_&&I(B),_&&I(w),p&&p.d(_),_&&I(H),D=!1,_e(j)}}}function Me(){const l=document.getElementById("navigation"),e="shadow-lg";window.scrollY>l.clientHeight?l.classList.add(e):l.classList.remove(e)}function Ne(l,e,t){let i,n,s;P(l,me,u=>t(2,i=u)),P(l,ge,u=>t(3,n=u)),P(l,ve,u=>t(4,s=u));function o(){localStorage.setItem("locale",i("locale.code")),he.set(i("locale.code"))}function c(){t(0,v=!v)}let{items:b}=e,{show:v=!1}=e;return l.$$set=u=>{"items"in u&&t(1,b=u.items),"show"in u&&t(0,v=u.show)},[v,b,i,n,s,o,c]}class Ae extends ${constructor(e){super(),x(this,e,Ne,qe,ee,{items:1,show:0})}}function ce(l,e,t){const i=l.slice();return i[4]=e[t],i}function ue(l){let e,t,i=l[4].name+"",n,s,o,c,b,v,u;return{c(){e=m("a"),t=m("span"),n=T(i),s=S(),o=m("i"),b=S(),a(t,"class","sr-only"),a(o,"class",c=ie(l[4].icon)+" svelte-1bzxy55"),a(e,"href",v=l[4].url),a(e,"target","_blank"),a(e,"class","text-gray-500 hover:text-gray-900"),a(e,"title",u=l[4].name)},m(r,g){L(r,e,g),f(e,t),f(t,n),f(e,s),f(e,o),f(e,b)},p(r,g){g&1&&i!==(i=r[4].name+"")&&E(n,i),g&1&&c!==(c=ie(r[4].icon)+" svelte-1bzxy55")&&a(o,"class",c),g&1&&v!==(v=r[4].url)&&a(e,"href",v),g&1&&u!==(u=r[4].name)&&a(e,"title",u)},d(r){r&&I(e)}}}function Ge(l){let e,t,i,n,s,o,c,b,v,u,r,g,M=l[3]("footer.privacy")+"",z,N,Y,F,G=l[3]("footer.company")+"",A,k,h,B,w=l[3]("footer.source")+"",H,D=l[0],j=[];for(let d=0;d<D.length;d+=1)j[d]=ue(ce(l,D,d));return{c(){e=m("footer"),t=m("div"),i=m("div");for(let d=0;d<j.length;d+=1)j[d].c();n=S(),s=m("div"),o=m("div"),c=m("span"),b=T(l[1]),v=T(" Blumilk"),u=S(),r=m("div"),g=m("a"),z=T(M),Y=S(),F=m("a"),A=T(G),h=S(),B=m("a"),H=T(w),a(i,"class","flex justify-center space-x-6 lg:order-2 text-lg"),a(g,"href",N=l[2]("./privacy")),a(g,"class","block lg:inline hover:text-gray-900 ml-4"),a(F,"href",k=l[2]("./company")),a(F,"class","block lg:inline hover:text-gray-900 ml-4"),a(B,"href","https://github.com/blumilksoftware/website"),a(B,"target","_blank"),a(B,"class","block lg:inline hover:text-gray-900 ml-4"),a(r,"class","text-center block mt-8 lg:mt-0 lg:inline"),a(o,"class","text-center text-base text-gray-700"),a(s,"class","mt-8 lg:mt-0 lg:order-1"),a(t,"class","container mx-auto py-8 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:px-8"),a(e,"class","mt-12 z-20")},m(d,y){L(d,e,y),f(e,t),f(t,i);for(let p=0;p<j.length;p+=1)j[p]&&j[p].m(i,null);f(t,n),f(t,s),f(s,o),f(o,c),f(c,b),f(c,v),f(o,u),f(o,r),f(r,g),f(g,z),f(r,Y),f(r,F),f(F,A),f(r,h),f(r,B),f(B,H)},p(d,[y]){if(y&1){D=d[0];let p;for(p=0;p<D.length;p+=1){const _=ce(d,D,p);j[p]?j[p].p(_,y):(j[p]=ue(_),j[p].c(),j[p].m(i,null))}for(;p<j.length;p+=1)j[p].d(1);j.length=D.length}y&2&&E(b,d[1]),y&8&&M!==(M=d[3]("footer.privacy")+"")&&E(z,M),y&4&&N!==(N=d[2]("./privacy"))&&a(g,"href",N),y&8&&G!==(G=d[3]("footer.company")+"")&&E(A,G),y&4&&k!==(k=d[2]("./company"))&&a(F,"href",k),y&8&&w!==(w=d[3]("footer.source")+"")&&E(H,w)},i:U,o:U,d(d){d&&I(e),le(j,d)}}}function He(l,e,t){let i,n;P(l,ge,c=>t(2,i=c)),P(l,me,c=>t(3,n=c));let{socials:s}=e,{year:o=new Date().getFullYear()}=e;return l.$$set=c=>{"socials"in c&&t(0,s=c.socials),"year"in c&&t(1,o=c.year)},[s,o,i,n]}class Te extends ${constructor(e){super(),x(this,e,He,Ge,ee,{socials:0,year:1})}}function Ye(l){let e,t,i,n,s,o,c,b;e=new ze({props:{bubbles:l[0]}}),i=new Ae({props:{items:Be}});const v=l[2].default,u=be(v,l,l[1],null);return c=new Te({props:{socials:je}}),{c(){V(e.$$.fragment),t=S(),V(i.$$.fragment),n=S(),s=m("div"),u&&u.c(),o=S(),V(c.$$.fragment),a(s,"class","w-full flex-grow flex flex-col justify-center items-center text-gray-700")},m(r,g){W(e,r,g),L(r,t,g),W(i,r,g),L(r,n,g),L(r,s,g),u&&u.m(s,null),L(r,o,g),W(c,r,g),b=!0},p(r,[g]){u&&u.p&&(!b||g&2)&&ke(u,v,r,r[1],b?ye(v,r[1],g,null):we(r[1]),null)},i(r){b||(Q(e.$$.fragment,r),Q(i.$$.fragment,r),Q(u,r),Q(c.$$.fragment,r),b=!0)},o(r){R(e.$$.fragment,r),R(i.$$.fragment,r),R(u,r),R(c.$$.fragment,r),b=!1},d(r){Z(e,r),r&&I(t),Z(i,r),r&&I(n),r&&I(s),u&&u.d(r),r&&I(o),Z(c,r)}}}function De(l,e,t){let{$$slots:i={},$$scope:n}=e;const s=[{left:20,size:32,delay:1,duration:6,popping:!1},{left:25,size:40,delay:0,duration:7,popping:!1},{left:36,size:36,delay:2,duration:5,popping:!1},{left:5,size:64,delay:0,duration:10,popping:!1},{left:56,size:72,delay:0,duration:5,popping:!1},{left:70,size:144,delay:3,duration:7,popping:!1},{left:72,size:36,delay:7,duration:5,popping:!1},{left:75,size:24,delay:6,duration:6,popping:!1},{left:92,size:108,delay:0,duration:8,popping:!1}];return l.$$set=o=>{"$$scope"in o&&t(1,n=o.$$scope)},[s,n,i]}class Ke extends ${constructor(e){super(),x(this,e,De,Ye,ee,{})}}export{Ke as default};
