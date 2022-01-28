!function (l) {
    "use strict"; var e = function () {
        this.$body = l("body"), this.$modal = l("#addUser-modal"),
        this.$calendar = l("#calendar"),
         this.$formEvent = l("#form-addUsers"),
        this.$btnNewEvent = l("#btn-new-event"), this.$btnDeleteEvent = l("#btn-delete-event"),
        this.$btnSaveEvent = l("#btn-save-event"), this.$modalTitle = l("#modal-title"),
        this.$calendarObj = null, this.$selectedEvent = null, this.$newEventData = null
    };
        e.prototype.init = function () {
            this.$modal = new bootstrap.Modal(document.getElementById("addUser-modal"),
                { keyboard: !1 }); var e = new Date(l.now());
            var t = [],
                a = this;
                    a.$formEvent.on("submit", function (e) {
                        e.preventDefault(); var t = a.$formEvent[0]; if (t.checkValidity()) {
                        
                            var username = l("#username").val();
                            var channel = l("#channel").val();
                            var password = l("#password").val();
                            // var date_added = new Date(l.now());
                            var mobile = l("#mobile").val();
                            var email = l("#email").val();
                            var role_id = l("#role_id").val();
                      
                            
                            $.ajax({
                                type: "POST",
                                url: "models/add_users.php",
                                data: {
                                    username: username, 
                                    channel: channel,
                                    password: password, 
                                    // date_added: date_added,
                                    mobile: mobile,
                                    email: email,
                                    role_id: role_id
                                },
                                cache: false,
                                success: function(data) {
                                    $('#datatable-users').DataTable().ajax.reload();
                                 
                                },
                                error: function(xhr, status, error) { 
                                    console.error("errNewUser", xhr , error);
                                }
                            });

                            $("#form-addUsers")[0].reset();
                            a.$modal.hide()
                            Swal.fire
                            ({title:"Success !",
                            text:"User has been added successfully!",
                            icon:"success"})
                          
                        } else e.stopPropagation(), t.classList.add("was-validated")
                    }),
                    l(a.$btnDeleteEvent.on("click", function (e) {
                        a.$selectedEvent && (a.$selectedEvent.remove(),
                            a.$selectedEvent = null, a.$modal.hide())
                    }))
        }, l.CalendarApp = new e, l.CalendarApp.Constructor = e
}(window.jQuery),
    function (e) { "use strict"; window.jQuery.CalendarApp.init() }();