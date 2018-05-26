<template>
    <div>
        
        <app-email-side-panel></app-email-side-panel>
        <app-inbox></app-inbox>
        <app-emails></app-emails>
    </div>
</template>

<script>
    //import Streamnavbar from '../stream/Streamnavbar.vue';
    import EmailSidePanel from './EmailSidePanel.vue';
    import Inbox from './Inbox.vue';
    import Emails from './Emails.vue';
    import EmailComposer from './EmailComposer.vue';
    
    export default {
        components: {
            //'app-streamnavbar': Streamnavbar,
            'app-email-side-panel': EmailSidePanel,
            'app-inbox': Inbox,
            'app-emails': Emails,
            'app-email-composer': EmailComposer,
            
        }
    }
</script>