import { createRouter , createWebHistory} from "vue-router";
import automatismeIndex from "../components/automatismes/index.vue"
import notFound from '../components/notFound.vue'
import automatismeNew from '../components/automatismes/new.vue'
import automatismeEdit from '../components/automatismes/edit.vue'
import automatismeGerer from '../components/automatismes/gerer.vue'


const routes =[
    {
        path:'/',
        component:automatismeIndex
    },
    {
        path:'/automatismes/new',
        component: automatismeNew
    },
    {
        path:'/automatismes/edit/:id',
        component: automatismeEdit,
        props:true
    },
    {
        path:'/automatismes/gerer/:id',
        component: automatismeGerer,
        props:true
    },
    {
        path:'/:pathMatch(.*)*',
        component:notFound
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes,
})

export default router
