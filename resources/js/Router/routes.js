
import organization from '../pages/organization.vue'
import employeeProfile from '../pages/employeeProfile.vue'


const routes = [
    { path:'/organization', component: organization, name:'organization'},
    { path:'/employees', component: employeeProfile, name: 'employees' }
    ]



export default routes;


