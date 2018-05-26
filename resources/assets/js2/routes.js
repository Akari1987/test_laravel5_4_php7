import Example from './components/Example.vue';
import MongoMessages from './components/MongoMessages.vue';
import MongoTalks from './components/MongoTalks.vue';

const routes = [
    // { path: '/testMongo', component: PageBody,
    //     children: [
    //         { path: 'friends', component: MongoMessages},
    //         { path: 'talkList', component: MongoMessages}
    //     ]
    // }
    { path: '/testMongo/friends', component: Example },
    { path: '/testMongo/mongoMessages', component: MongoMessages },
    { path: '/testMongo/talkList', component: MongoTalks }
];

export default routes;