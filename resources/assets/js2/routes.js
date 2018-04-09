import Example from './components/Example.vue';
import MongoMessages from './components/MongoMessages.vue';

const routes = [
    // { path: '/testMongo', component: PageBody,
    //     children: [
    //         { path: 'friends', component: MongoMessages},
    //         { path: 'talkList', component: MongoMessages}
    //     ]
    // }
    { path: '/testMongo/friends', component: Example },
    { path: '/testMongo/talkList', component: MongoMessages }
];

export default routes;