import{_ as c}from"./AppLayout-0af7cbdd.js";import p from"./DeleteUserForm-765ad961.js";import l from"./LogoutOtherBrowserSessionsForm-6b85b8f4.js";import{S as s}from"./SectionBorder-3ce62bee.js";import f from"./TwoFactorAuthenticationForm-84cbd462.js";import u from"./UpdatePasswordForm-1ae3fc60.js";import _ from"./UpdateProfileInformationForm-1fcf619a.js";import{o,c as d,w as n,a as i,e as r,b as t,f as a,F as h}from"./app-67477778.js";import"./DialogModal-b0a4c343.js";import"./SectionTitle-978f928d.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./DangerButton-d7c4342f.js";import"./TextInput-344f0fdf.js";import"./SecondaryButton-7a308d98.js";import"./ActionMessage-056e6cef.js";import"./PrimaryButton-214cee1b.js";import"./InputLabel-9fb92c04.js";import"./FormSection-ae628d25.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},z={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{z as default};