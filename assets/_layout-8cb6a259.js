import{S as Z,i as x,s as ee,h as m,j as T,a as C,C as ge,o as X,k as a,b as j,l as c,B as K,p as Q,f as I,q as le,F as ue,g as R,X as _e,z as me,G as pe,n as $,I as ve,J as ae,v as de,c as U,m as V,w as he,x as be,y as ke,t as O,d as P,e as W}from"./index-5b27ef6c.js";import{B as we}from"./bubbles-f0724818.js";class A{constructor(e,t,i=!1){this.label=t,this.link=e,this.external=i}}const ye=[new A("./about","navigation.about"),new A("./services","navigation.services"),new A("./partnerships","navigation.partnerships"),new A("./career","navigation.career"),new A("./contact","navigation.contact")];class J{constructor(e,t,i){this.name=e,this.icon=t,this.url=i}}const ze=[new J("Clutch","clutch icon","https://clutch.co/profile/blumilk-0"),new J("Github","github icon","https://github.com/blumilksoftware"),new J("LinkedIn","linkedin icon","https://linkedin.com/company/blumilksoftware"),new J("Facebook","facebook icon","https://facebook.com/blumilksoftware"),new J("Instagram","instagram icon","https://instagram.com/blumilksoftware"),new J("Twitter","twitter icon","https://twitter.com/blumilksoftware")];const{window:Be}=pe;function ie(l,e,t){const i=l.slice();return i[6]=e[t],i}function se(l,e,t){const i=l.slice();return i[6]=e[t],i}function je(l){let e,t=l[2](l[6].label)+"",i,s,n;return{c(){e=m("a"),i=T(t),a(e,"href",s=l[6].link),a(e,"target","_blank"),a(e,"data-cy",n=l[2](l[6].label))},m(o,u){j(o,e,u),c(e,i)},p(o,u){u&6&&t!==(t=o[2](o[6].label)+"")&&$(i,t),u&2&&s!==(s=o[6].link)&&a(e,"href",s),u&6&&n!==(n=o[2](o[6].label))&&a(e,"data-cy",n)},d(o){o&&I(e)}}}function Ie(l){let e,t=l[2](l[6].label)+"",i,s,n;return{c(){e=m("a"),i=T(t),a(e,"href",s=l[3](l[6].link)),a(e,"data-cy",n=l[2](l[6].label))},m(o,u){j(o,e,u),c(e,i)},p(o,u){u&6&&t!==(t=o[2](o[6].label)+"")&&$(i,t),u&10&&s!==(s=o[3](o[6].link))&&a(e,"href",s),u&6&&n!==(n=o[2](o[6].label))&&a(e,"data-cy",n)},d(o){o&&I(e)}}}function ne(l){let e;function t(n,o){return n[6].external?je:Ie}let i=t(l),s=i(l);return{c(){e=m("div"),s.c(),a(e,"class","lowercase ml-8")},m(n,o){j(n,e,o),s.m(e,null)},p(n,o){i===(i=t(n))&&s?s.p(n,o):(s.d(1),s=i(n),s&&(s.c(),s.m(e,null)))},d(n){n&&I(e),s.d()}}}function oe(l){let e,t,i,s,n,o,u,h,p,v,r,g,S,y,N=l[2]("locale.language")+"",G,Y,q,M=l[1],w=[];for(let d=0;d<M.length;d+=1)w[d]=re(ie(l,M,d));return{c(){e=m("div"),t=m("div"),i=m("a"),s=m("img"),u=C();for(let d=0;d<w.length;d+=1)w[d].c();h=C(),p=m("div"),v=m("img"),y=C(),G=T(N),X(s.src,n="/logo.svg")||a(s,"src",n),a(s,"alt","Blumilk"),a(s,"class","w-24"),a(i,"href",o=l[3]("./")),a(i,"class","mx-auto mb-12"),a(v,"class","w-6 mx-2"),X(v.src,r=l[2]("locale.flag"))||a(v,"src",r),a(v,"alt",g=l[2]("locale.language")),a(v,"title",S=l[2]("locale.language")),a(p,"class","flex text-center p-2 hover:bg-blue-400 hover:bg-opacity-25 items-center justify-center cursor-pointer"),a(t,"class","flex flex-col w-full text-center"),a(e,"class","md:hidden fixed w-full h-full flex flex-col justify-center items-center bg-white bg-opacity-95 p-4 z-30")},m(d,L){j(d,e,L),c(e,t),c(t,i),c(i,s),c(t,u);for(let b=0;b<w.length;b+=1)w[b].m(t,null);c(t,h),c(t,p),c(p,v),c(p,y),c(p,G),Y||(q=[K(p,"click",l[4]),K(e,"click",l[5])],Y=!0)},p(d,L){if(L&8&&o!==(o=d[3]("./"))&&a(i,"href",o),L&14){M=d[1];let b;for(b=0;b<M.length;b+=1){const H=ie(d,M,b);w[b]?w[b].p(H,L):(w[b]=re(H),w[b].c(),w[b].m(t,h))}for(;b<w.length;b+=1)w[b].d(1);w.length=M.length}L&4&&!X(v.src,r=d[2]("locale.flag"))&&a(v,"src",r),L&4&&g!==(g=d[2]("locale.language"))&&a(v,"alt",g),L&4&&S!==(S=d[2]("locale.language"))&&a(v,"title",S),L&4&&N!==(N=d[2]("locale.language")+"")&&$(G,N)},d(d){d&&I(e),le(w,d),Y=!1,ue(q)}}}function Le(l){let e,t=l[2](l[6].label)+"",i,s;return{c(){e=m("a"),i=T(t),a(e,"href",s=l[6].link),a(e,"target","_blank")},m(n,o){j(n,e,o),c(e,i)},p(n,o){o&6&&t!==(t=n[2](n[6].label)+"")&&$(i,t),o&2&&s!==(s=n[6].link)&&a(e,"href",s)},d(n){n&&I(e)}}}function Ce(l){let e,t=l[2](l[6].label)+"",i,s;return{c(){e=m("a"),i=T(t),a(e,"href",s=l[3](l[6].link))},m(n,o){j(n,e,o),c(e,i)},p(n,o){o&6&&t!==(t=n[2](n[6].label)+"")&&$(i,t),o&10&&s!==(s=n[3](n[6].link))&&a(e,"href",s)},d(n){n&&I(e)}}}function re(l){let e;function t(n,o){return n[6].external?Le:Ce}let i=t(l),s=i(l);return{c(){e=m("div"),s.c(),a(e,"class","lowercase text-center p-2 hover:bg-blue-400 hover:bg-opacity-25")},m(n,o){j(n,e,o),s.m(e,null)},p(n,o){i===(i=t(n))&&s?s.p(n,o):(s.d(1),s=i(n),s&&(s.c(),s.m(e,null)))},d(n){n&&I(e),s.d()}}}function Se(l){let e,t,i,s,n,o,u,h,p,v,r,g,S,y,N,G,Y,q,M,w,d,L,b,H,E,D,z=l[1],_=[];for(let f=0;f<z.length;f+=1)_[f]=ne(se(l,z,f));let k=l[0]&&oe(l);return{c(){e=m("div"),t=m("div"),i=m("div"),s=m("a"),n=m("img"),u=T(`
                Blumilk
                `),h=m("span"),h.textContent="_",v=C(),r=m("div");for(let f=0;f<_.length;f+=1)_[f].c();g=C(),S=m("div"),y=m("img"),M=C(),w=m("div"),w.innerHTML='<i class="large bars icon" data-cy="menu-bars"></i>',d=C(),L=m("div"),b=C(),k&&k.c(),H=ge(),X(n.src,o="/logo.svg")||a(n,"src",o),a(n,"alt","Blumilk"),a(n,"class","w-12 mr-3"),a(h,"id","cursor"),a(h,"class","text-brand svelte-t822rh"),a(s,"href",p=l[3]("./")),a(s,"class","flex lowercase font-bold items-center"),a(i,"class","text-2xl"),a(y,"class","w-6 cursor-pointer"),X(y.src,N=l[2]("locale.flag"))||a(y,"src",N),a(y,"data-cy",G=l[2]("locale.language")),a(y,"alt",Y=l[2]("locale.language")),a(y,"title",q=l[2]("locale.language")),a(S,"class","ml-8"),a(r,"class","flex-1 justify-end items-center hidden md:flex"),a(w,"class","flex-grow cursor-pointer text-right md:hidden"),a(t,"class","md:container mx-auto flex items-center px-6"),a(e,"id","navigation"),a(e,"class","fixed left-0 right-0 py-4 z-50 bg-background duration-300"),a(L,"class","mb-48")},m(f,B){j(f,e,B),c(e,t),c(t,i),c(i,s),c(s,n),c(s,u),c(s,h),c(t,v),c(t,r);for(let F=0;F<_.length;F+=1)_[F].m(r,null);c(r,g),c(r,S),c(S,y),c(t,M),c(t,w),j(f,d,B),j(f,L,B),j(f,b,B),k&&k.m(f,B),j(f,H,B),E||(D=[K(Be,"scroll",Fe),K(y,"click",l[4]),K(w,"click",l[5])],E=!0)},p(f,[B]){if(B&8&&p!==(p=f[3]("./"))&&a(s,"href",p),B&14){z=f[1];let F;for(F=0;F<z.length;F+=1){const te=se(f,z,F);_[F]?_[F].p(te,B):(_[F]=ne(te),_[F].c(),_[F].m(r,g))}for(;F<_.length;F+=1)_[F].d(1);_.length=z.length}B&4&&!X(y.src,N=f[2]("locale.flag"))&&a(y,"src",N),B&4&&G!==(G=f[2]("locale.language"))&&a(y,"data-cy",G),B&4&&Y!==(Y=f[2]("locale.language"))&&a(y,"alt",Y),B&4&&q!==(q=f[2]("locale.language"))&&a(y,"title",q),f[0]?k?k.p(f,B):(k=oe(f),k.c(),k.m(H.parentNode,H)):k&&(k.d(1),k=null)},i:Q,o:Q,d(f){f&&I(e),le(_,f),f&&I(d),f&&I(L),f&&I(b),k&&k.d(f),f&&I(H),E=!1,ue(D)}}}function Fe(){const l=document.getElementById("navigation"),e="shadow-lg";window.scrollY>l.clientHeight?l.classList.add(e):l.classList.remove(e)}function qe(l,e,t){let i,s;R(l,_e,p=>t(2,i=p)),R(l,me,p=>t(3,s=p));function n(){localStorage.setItem("locale",i("locale.code")),ve.set(i("locale.code"))}function o(){t(0,h=!h)}let{items:u}=e,{show:h=!1}=e;return l.$$set=p=>{"items"in p&&t(1,u=p.items),"show"in p&&t(0,h=p.show)},[h,u,i,s,n,o]}class Me extends Z{constructor(e){super(),x(this,e,qe,Se,ee,{items:1,show:0})}}function fe(l,e,t){const i=l.slice();return i[4]=e[t],i}function ce(l){let e,t,i=l[4].name+"",s,n,o,u,h,p,v;return{c(){e=m("a"),t=m("span"),s=T(i),n=C(),o=m("i"),h=C(),a(t,"class","sr-only"),a(o,"class",u=ae(l[4].icon)+" svelte-1bzxy55"),a(e,"href",p=l[4].url),a(e,"target","_blank"),a(e,"class","text-gray-500 hover:text-gray-900"),a(e,"title",v=l[4].name)},m(r,g){j(r,e,g),c(e,t),c(t,s),c(e,n),c(e,o),c(e,h)},p(r,g){g&1&&i!==(i=r[4].name+"")&&$(s,i),g&1&&u!==(u=ae(r[4].icon)+" svelte-1bzxy55")&&a(o,"class",u),g&1&&p!==(p=r[4].url)&&a(e,"href",p),g&1&&v!==(v=r[4].name)&&a(e,"title",v)},d(r){r&&I(e)}}}function Ne(l){let e,t,i,s,n,o,u,h,p,v,r,g,S,y=l[3]("footer.privacy")+"",N,G,Y,q,M=l[3]("footer.company")+"",w,d,L,b,H=l[3]("footer.source")+"",E,D=l[0],z=[];for(let _=0;_<D.length;_+=1)z[_]=ce(fe(l,D,_));return{c(){e=m("footer"),t=m("div"),i=m("div");for(let _=0;_<z.length;_+=1)z[_].c();s=C(),n=m("div"),o=m("div"),u=m("span"),h=T("© "),p=T(l[1]),v=T(" Blumilk"),r=C(),g=m("div"),S=m("a"),N=T(y),Y=C(),q=m("a"),w=T(M),L=C(),b=m("a"),E=T(H),a(i,"class","flex justify-center space-x-6 lg:order-2 text-lg"),a(S,"href",G=l[2]("./privacy")),a(S,"class","block lg:inline hover:text-gray-900 ml-4"),a(q,"href",d=l[2]("./company")),a(q,"class","block lg:inline hover:text-gray-900 ml-4"),a(b,"href","https://github.com/blumilksoftware/website"),a(b,"target","_blank"),a(b,"class","block lg:inline hover:text-gray-900 ml-4"),a(g,"class","text-center block mt-8 lg:mt-0 lg:inline"),a(o,"class","text-center text-base text-gray-700"),a(n,"class","mt-8 lg:mt-0 lg:order-1"),a(t,"class","container mx-auto py-8 px-4 sm:px-6 lg:flex lg:items-center lg:justify-between lg:px-8"),a(e,"class","mt-12 z-20")},m(_,k){j(_,e,k),c(e,t),c(t,i);for(let f=0;f<z.length;f+=1)z[f].m(i,null);c(t,s),c(t,n),c(n,o),c(o,u),c(u,h),c(u,p),c(u,v),c(o,r),c(o,g),c(g,S),c(S,N),c(g,Y),c(g,q),c(q,w),c(g,L),c(g,b),c(b,E)},p(_,[k]){if(k&1){D=_[0];let f;for(f=0;f<D.length;f+=1){const B=fe(_,D,f);z[f]?z[f].p(B,k):(z[f]=ce(B),z[f].c(),z[f].m(i,null))}for(;f<z.length;f+=1)z[f].d(1);z.length=D.length}k&2&&$(p,_[1]),k&8&&y!==(y=_[3]("footer.privacy")+"")&&$(N,y),k&4&&G!==(G=_[2]("./privacy"))&&a(S,"href",G),k&8&&M!==(M=_[3]("footer.company")+"")&&$(w,M),k&4&&d!==(d=_[2]("./company"))&&a(q,"href",d),k&8&&H!==(H=_[3]("footer.source")+"")&&$(E,H)},i:Q,o:Q,d(_){_&&I(e),le(z,_)}}}function Ge(l,e,t){let i,s;R(l,me,u=>t(2,i=u)),R(l,_e,u=>t(3,s=u));let{socials:n}=e,{year:o=new Date().getFullYear()}=e;return l.$$set=u=>{"socials"in u&&t(0,n=u.socials),"year"in u&&t(1,o=u.year)},[n,o,i,s]}class He extends Z{constructor(e){super(),x(this,e,Ge,Ne,ee,{socials:0,year:1})}}function Te(l){let e,t,i,s,n,o,u,h;e=new we({props:{bubbles:l[0]}}),i=new Me({props:{items:ye}});const p=l[2].default,v=de(p,l,l[1],null);return u=new He({props:{socials:ze}}),{c(){U(e.$$.fragment),t=C(),U(i.$$.fragment),s=C(),n=m("div"),v&&v.c(),o=C(),U(u.$$.fragment),a(n,"class","w-full flex-grow flex flex-col justify-center items-center text-gray-700")},m(r,g){V(e,r,g),j(r,t,g),V(i,r,g),j(r,s,g),j(r,n,g),v&&v.m(n,null),j(r,o,g),V(u,r,g),h=!0},p(r,[g]){v&&v.p&&(!h||g&2)&&he(v,p,r,r[1],h?ke(p,r[1],g,null):be(r[1]),null)},i(r){h||(O(e.$$.fragment,r),O(i.$$.fragment,r),O(v,r),O(u.$$.fragment,r),h=!0)},o(r){P(e.$$.fragment,r),P(i.$$.fragment,r),P(v,r),P(u.$$.fragment,r),h=!1},d(r){W(e,r),r&&I(t),W(i,r),r&&I(s),r&&I(n),v&&v.d(r),r&&I(o),W(u,r)}}}function Ye(l,e,t){let{$$slots:i={},$$scope:s}=e;const n=[{left:20,size:32,delay:1,duration:6,popping:!1},{left:25,size:40,delay:0,duration:7,popping:!1},{left:36,size:36,delay:2,duration:5,popping:!1},{left:5,size:64,delay:0,duration:10,popping:!1},{left:56,size:72,delay:0,duration:5,popping:!1},{left:70,size:144,delay:3,duration:7,popping:!1},{left:72,size:36,delay:7,duration:5,popping:!1},{left:75,size:24,delay:6,duration:6,popping:!1},{left:92,size:108,delay:0,duration:8,popping:!1}];return l.$$set=o=>{"$$scope"in o&&t(1,s=o.$$scope)},[n,s,i]}class Ee extends Z{constructor(e){super(),x(this,e,Ye,Te,ee,{})}}export{Ee as default};
