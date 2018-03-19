const routes = [
    { path: '/user/:id',
        component: Profile,
            children: [
                {
                    path: '', component: Activity,
                },
                
                {
                    path: 'follow', component: Follows    
                },
                
                {
                    path: 'activity', component: Activity
                }    
            ]
    },
    
    { path: '/home', component: Profile },
    
    { path: '/testMongo', component: Example },
    
    { path: '/stream', components: { default: Stream,
                                     streamboxnavbar: Streamboxnavbar}
    },
    { path: '/member', components: { default: Member,
                                     streamboxnavbar: Streamboxnavbar}
    },
    { path: '/email', components: { default: Email,
                                    streamboxnavbar: Streamboxnavbar}
    },
];

export default {
    routes
}