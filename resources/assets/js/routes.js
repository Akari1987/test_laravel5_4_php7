const routes = [
    { path: '/user/:id',
        component: Profile,
            children: [
                { path: '', component: Activity},
                { path: 'follow', component: Follows},
                { path: 'activity', component: Activity}    
            ]
    },
    
    { path: '/home', component: Profile },
    
    { path: '/testMongo', component: Example },
    
    { path: '/stream', components: Stream
    },
    { path: '/member', components: { default: Member }
    },
    { path: '/email', components: { default: Email }
    },
];

export default {
    routes
}