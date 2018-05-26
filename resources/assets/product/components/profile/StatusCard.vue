<template>
    <!--<v-app>-->
        <div class="status-card panel panel-default" v-if="!isMe">
            <div class="row">
                <p class="text-center" v-if="loading">
                    Loading...
                </p>
                <p class="text-center" v-if="!loading">
                    <!--<div class="isLarge" v-if="isNotLarge == false">-->
                        <div class="text-center" v-if="status == 0">
                            <button class="btn btn-success">+ Friend Request</button>
                            <button class="btn btn-success">+ Follow</button>
                        </div>
                    <!--<button class="btn btn-success" v-if="status == 0">+ Friend Request</button>-->
                    <!--<button class="btn btn-success" v-if="status == 0">+ Follow</button>-->
                        <!--<span class="text-success" v-if="status == 'friends'">Your Friend</span>-->
                        <button class="btn btn-success" v-if="status == 'pending'" @click="accept_friend">Accept Friend</button>
                        <button class="btn btn-success" v-if="status == 'waiting'">Waiting</button>
                        <button class="btn btn-success a-btn" v-if="status == 'friends'">
                            <span></span>
                            <span>Your Frined</span>
                            <span>Unfriend</span>
                        </button>
                    <!--</div>-->
                    <!--<div class="isNotLarge" v-if="isNotLarge == true">-->
                        <!--<v-dialog v-model="dialog" lazy absolute>-->
                        <!--    <v-btn primary dark slot="activator">Open Dialog</v-btn>-->
                        <!--    <v-card>-->
                        <!--        <v-card-title>-->
                        <!--            <div class="headline">Use Google's location service?</div>-->
                        <!--        </v-card-title>-->
                        <!--        <v-card-text>Let Google help apps determine location. This means sending anonymous location data to Google, even when no apps are running.</v-card-text>-->
                        <!--        <v-card-actions>-->
                        <!--            <v-spacer></v-spacer>-->
                        <!--            <v-btn class="green--text darken-1" flat="flat" @click.native="dialog = false">Disagree</v-btn>-->
                        <!--            <v-btn class="green--text darken-1" flat="flat" @click.native="dialog = false">Agree</v-btn>-->
                        <!--        </v-card-actions>-->
                        <!--    </v-card>-->
                        <!--</v-dialog>-->
                    <!--    <sweet-modal ref="modal">-->
                    <!--        <span>フォローを解除</span>-->
                    <!--    </sweet-modal>-->
                    <!--    <button class="btn btn-scuccss center" @click="openModal">Open modal</button>-->
                    <!--</div>-->
                    <!--<button class="btn btn-success" v-if="status == 0" @click="">+ Follow</button>-->
                </p>
            </div>
   <!--         <div class="ibox-content">-->
   <!--             <div class="text-center">-->
   <!--             <a data-toggle="modal" class="btn btn-primary" href="#modal-form">Form in simple modal box</a>-->
   <!--             </div>-->
   <!--             <div id="modal-form" class="modal fade" aria-hidden="true">-->
   <!--                 <div class="modal-dialog">-->
   <!--                     <div class="modal-content">-->
   <!--                         <div class="modal-body">-->
   <!--                             <div class="row">-->
   <!--                                 <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Sign in</h3>-->

   <!--                                     <p>Sign in today for more expirience.</p>-->

   <!--                                     <form role="form">-->
   <!--                                         <div class="form-group"><label>Email</label> <input type="email" placeholder="Enter email" class="form-control"></div>-->
   <!--                                         <div class="form-group"><label>Password</label> <input type="password" placeholder="Password" class="form-control"></div>-->
   <!--                                         <div>-->
   <!--                                             <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>-->
   <!--                                             <label> <input type="checkbox" class="i-checks"> Remember me </label>-->
   <!--                                         </div>-->
   <!--                                     </form>-->
   <!--                                 </div>-->
   <!--                                 <div class="col-sm-6"><h4>Not a member?</h4>-->
   <!--                                     <p>You can create an account:</p>-->
   <!--                                     <p class="text-center">-->
   <!--                                         <a href=""><i class="fa fa-sign-in big-icon"></i></a>-->
   <!--                                     </p>-->
			<!--						</div>-->
			<!--					</div>-->
			<!--				</div>-->
   <!--                     </div>-->
   <!--                 </div>-->
			<!--	</div>-->
			<!--</div>-->
			<!--<div class="wrapper wrapper-content  animated fadeInRight">-->

   <!--         <div class="row">-->
   <!--             <div class="col-lg-4">-->
   <!--                 <div class="ibox ">-->
   <!--                     <div class="ibox-title">-->
   <!--                         <h5>Inspinia modal window</h5>-->

   <!--                     </div>-->
   <!--                     <div class="ibox-content">-->
   <!--                         <p>-->
   <!--                             Modals are streamlined, but flexible, dialog prompts with the minimum required functionality and smart defaults.-->
   <!--                         </p>-->
   <!--                         <p>-->
   <!--                             To creata a custom Inspinia modal all you have to do is to add <code>.inmodal</code> class to html modal element.-->
   <!--                             Modal contains title, content and footer-->
   <!--                         </p>-->
   <!--                         <div class="text-center">-->
   <!--                         <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">-->
   <!--                             Launch demo modal-->
   <!--                         </button>-->
   <!--                             </div>-->
   <!--                         <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">-->
   <!--                             <div class="modal-dialog">-->
   <!--                             <div class="modal-content animated bounceInRight">-->
   <!--                                     <div class="modal-header">-->
   <!--                                         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
   <!--                                         <i class="fa fa-laptop modal-icon"></i>-->
   <!--                                         <h4 class="modal-title">Modal title</h4>-->
   <!--                                         <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
   <!--                                     </div>-->
   <!--                                     <div class="modal-body">-->
   <!--                                         <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown-->
   <!--                                             printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,-->
   <!--                                             remaining essentially unchanged.</p>-->
   <!--                                                 <div class="form-group"><label>Sample Input</label> <input type="email" placeholder="Enter your email" class="form-control"></div>-->
   <!--                                     </div>-->
   <!--                                     <div class="modal-footer">-->
   <!--                                         <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>-->
   <!--                                         <button type="button" class="btn btn-primary">Save changes</button>-->
   <!--                                     </div>-->
   <!--                                 </div>-->
   <!--                             </div>-->
   <!--                         </div>-->

   <!--                     </div>-->
   <!--                 </div>-->
                    <!--<div class="ibox float-e-margins">-->
                    <!--    <div class="ibox-title">-->
                    <!--        <h5>Optional sizes</h5>-->

                    <!--    </div>-->
                    <!--    <div class="ibox-content">-->
                    <!--        <p>-->
                    <!--            Modals have two optional sizes, available via modifier classes to be placed on a <code>.modal-dialog</code>-->
                    <!--        </p>-->

                    <!--        <div class="text-center">-->
                    <!--            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal5">-->
                    <!--                Large Modal-->
                    <!--            </button>-->
                    <!--            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal6">-->
                    <!--                Small Modal-->
                    <!--            </button>-->
                    <!--        </div>-->
                    <!--        <div class="modal inmodal fade" id="myModal5" tabindex="-1" role="dialog"  aria-hidden="true">-->
                    <!--            <div class="modal-dialog modal-lg">-->
                    <!--                <div class="modal-content">-->
                    <!--                    <div class="modal-header">-->
                    <!--                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                    <!--                        <h4 class="modal-title">Modal title</h4>-->
                    <!--                        <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                    <!--                    </div>-->
                    <!--                    <div class="modal-body">-->
                    <!--                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown-->
                    <!--                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,-->
                    <!--                            remaining essentially unchanged.</p>-->
                    <!--                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown-->
                    <!--                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,-->
                    <!--                            remaining essentially unchanged.</p>-->
                    <!--                    </div>-->

                    <!--                    <div class="modal-footer">-->
                    <!--                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>-->
                    <!--                        <button type="button" class="btn btn-primary">Save changes</button>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--        <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">-->
                    <!--            <div class="modal-dialog modal-sm">-->
                    <!--                <div class="modal-content">-->
                    <!--                    <div class="modal-header">-->
                    <!--                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                    <!--                        <h4 class="modal-title">Modal title</h4>-->
                    <!--                    </div>-->
                    <!--                    <div class="modal-body">-->
                    <!--                        <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown-->
                    <!--                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,-->
                    <!--                            remaining essentially unchanged.</p>-->
                    <!--                    </div>-->
                    <!--                    <div class="modal-footer">-->
                    <!--                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>-->
                    <!--                        <button type="button" class="btn btn-primary">Save changes</button>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->

                    <!--    </div>-->
                    <!--</div>-->
   <!--             </div>-->
                <!--<div class="col-lg-8">-->
                <!--    <div class="ibox ">-->
                <!--        <div class="ibox-title">-->
                <!--            <h5>Animation Effect</h5>-->
                <!--        </div>-->
                <!--        <div class="ibox-content">-->
                <!--            <p>-->
                <!--                You can add any animation effect to your modal window. Just pick up some of the effect from animation page and add it to <code>.modal-content</code> elemente.-->
                <!--            </p>-->
                <!--            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2">-->
                <!--                FlipInY effect-->
                <!--            </button>-->
                <!--            <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">-->
                <!--                <div class="modal-dialog">-->
                <!--                    <div class="modal-content animated flipInY">-->
                <!--                        <div class="modal-header">-->
                <!--                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                <!--                            <h4 class="modal-title">Modal title</h4>-->
                <!--                            <small class="font-bold">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                <!--                        </div>-->
                <!--                        <div class="modal-body">-->
                <!--                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown-->
                <!--                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,-->
                <!--                                remaining essentially unchanged.</p>-->
                <!--                        </div>-->
                <!--                        <div class="modal-footer">-->
                <!--                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>-->
                <!--                            <button type="button" class="btn btn-primary">Save changes</button>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">-->
                <!--                Basic fadeIn effect-->
                <!--            </button>-->
                <!--            <div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog"  aria-hidden="true">-->
                <!--                <div class="modal-dialog">-->
                <!--                    <div class="modal-content animated fadeIn">-->
                <!--                        <div class="modal-header">-->
                <!--                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>-->
                <!--                            <i class="fa fa-clock-o modal-icon"></i>-->
                <!--                            <h4 class="modal-title">Modal title</h4>-->
                <!--                            <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>-->
                <!--                        </div>-->
                <!--                        <div class="modal-body">-->
                <!--                            <p><strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown-->
                <!--                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,-->
                <!--                                remaining essentially unchanged.</p>-->
                <!--                        </div>-->
                <!--                        <div class="modal-footer">-->
                <!--                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>-->
                <!--                            <button type="button" class="btn btn-primary">Save changes</button>-->
                <!--                        </div>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--    <div class="ibox ">-->
                <!--        <div class="ibox-title">-->
                <!--            <h5>Options</h5>-->
                <!--        </div>-->
                <!--        <div class="ibox-content">-->
                <!--            <p>-->
                <!--                Options can be passed via data attributes or JavaScript. For data attributes, append the option name to <code>data-</code>, as in <code>data-backdrop=""</code>.-->
                <!--            </p>-->
                <!--            <div class="table-responsive">-->
                <!--                <table class="table table-bordered table-striped">-->
                <!--                    <thead>-->
                <!--                    <tr>-->
                <!--                        <th style="width: 100px;">Name</th>-->
                <!--                        <th style="width: 50px;">type</th>-->
                <!--                        <th style="width: 50px;">default</th>-->
                <!--                        <th>description</th>-->
                <!--                    </tr>-->
                <!--                    </thead>-->
                <!--                    <tbody>-->
                <!--                    <tr>-->
                <!--                        <td>backdrop</td>-->
                <!--                        <td>boolean or the string <code>'static'</code></td>-->
                <!--                        <td>true</td>-->
                <!--                        <td>Includes a modal-backdrop element. Alternatively, specify <code>static</code> for a backdrop which doesn't close the modal on click.</td>-->
                <!--                    </tr>-->
                <!--                    <tr>-->
                <!--                        <td>keyboard</td>-->
                <!--                        <td>boolean</td>-->
                <!--                        <td>true</td>-->
                <!--                        <td>Closes the modal when escape key is pressed</td>-->
                <!--                    </tr>-->
                <!--                    <tr>-->
                <!--                        <td>show</td>-->
                <!--                        <td>boolean</td>-->
                <!--                        <td>true</td>-->
                <!--                        <td>Shows the modal when initialized.</td>-->
                <!--                    </tr>-->
                <!--                    <tr>-->
                <!--                        <td>remote</td>-->
                <!--                        <td>path</td>-->
                <!--                        <td>false</td>-->
                <!--                        <td>-->
                <!--                            <p><strong class="text-danger">This option is deprecated since v3.3.0 and will be removed in v4.</strong> We recommend instead using client-side templating or a data binding framework, or calling <a href="http://api.jquery.com/load/">jQuery.load</a> yourself.</p>-->
                <!--                            <p>If a remote URL is provided, <strong>content will be loaded one time</strong> via jQuery's <code>load</code> method and injected into the <code>.modal-content</code> div. If you're using the data-api, you may alternatively use the <code>href</code> attribute to specify the remote source. An example of this is shown below:</p>-->
                <!--                            <div class="zero-clipboard"><span class="btn-clipboard">Copy</span></div><div class="highlight"><pre><code class="language-html" data-lang="html"><span class="nt">&lt;a</span> <span class="na">data-toggle=</span><span class="s">"modal"</span> <span class="na">href=</span><span class="s">"remote.html"</span> <span class="na">data-target=</span><span class="s">"#modal"</span><span class="nt">&gt;</span>Click me<span class="nt">&lt;/a&gt;</span></code></pre></div>-->
                <!--                        </td>-->
                <!--                    </tr>-->
                <!--                    </tbody>-->
                <!--                </table>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
   <!--         </div>-->
   <!--     </div>-->
        </div>
    <!--</v-app>-->
</template>

<script>
    import {displayMixin} from '../../mixins/displayMixin';
    import {isMeMixin}  from '../../mixins/isMeMixin';
    // import {sweetModalMixin} from '../../mixins/sweetModalMixin';
    
    export default {
        mixins: [displayMixin, isMeMixin],
        data() {
           return {
               status: "",
               loading: true,
            //   dialog: false,
           } 
        },
        mounted() {
            axios.get('/check_relationship_status/' + this.$route.params.id).then(response => {
                this.status = response.data.status;
                this.loading = false;
            });
        },
        computed: {
            relationshipStatus() {
                
            }
        },
        methods: {
            // openModal() {
            //     this.$refs.modal.open();
            // }
            accept_friend() {
                axios.get('/accept_friend/' + this.$route.params.id);
            }
        }
    }
</script>

<style scoped>
    .sweet-modal-overlay {
        /*left: 220px;*/
    }
    
    .modal {
        z-index: 100010;
    }
    
    .modal-dialog {
        z-index: 100020;
    }
</style>