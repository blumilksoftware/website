import Home from "./views/Home.svelte"
import Career from "./views/Career.svelte"
import Contact from "./views/Contact.svelte"
import Services from "./views/Services.svelte"
import NotFound from "./views/NotFound.svelte"

export default {
    "/": Home,
    "/services": Services,
    "/career": Career,
    "/contact": Contact,
    "*": NotFound,
}
