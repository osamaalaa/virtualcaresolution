!function (l) {
    "use strict"; var e = function () {
        this.$body = l("body"), this.$modal = l("#event-modal"),
            this.$calendar = l("#calendar"),
            this.$formEvent = l("#form-appointments"),
            this.$btnNewEvent = l("#btn-new-event"), this.$btnDeleteEvent = l("#btn-delete-event"),
            this.$btnSaveEvent = l("#btn-save-event"), this.$modalTitle = l("#modal-title"),
            this.$calendarObj = null,
            this.$selectedEvent = null,
            this.$newEventData = null, this.selectedUUID = null
    };
    e.prototype.onEventClick = function (e) {
        //  this.$formEvent[0].reset(),
        this.$formEvent.removeClass("was-validated"),
            this.$newEventData = null,
            this.$btnDeleteEvent.show()
        this.$modalTitle.text("Edit Event"), this.$modal.hide(),
            this.$selectedEvent = e.event, l("#patient_name").val(this.$selectedEvent.title),
            l("#event-category").val(this.$selectedEvent.classNames[0])
    },
        e.prototype.onSelect = function (e) {
            this.$formEvent[0].reset(),
                this.$formEvent.removeClass("was-validated"),
                this.$selectedEvent = null, this.$newEventData = e,
                this.$btnDeleteEvent.hide(),
                this.$modalTitle.text("Add New Appointment"),
                this.$modal.show(), this.$calendarObj.unselect()
        },
        e.prototype.init = function () {
            this.$modal = new bootstrap.Modal(document.getElementById("event-modal"),
                { keyboard: !1 });
            var e = new Date(l.now());
            new FullCalendar.Draggable(document.getElementById("external-events"), {
                itemSelector: ".external-event",
                eventData: function (e) {
                    return {
                        title: e.innerText,
                        className: l(e).data("class")
                    }
                }
            });
            var return_first = function () {
                var tmp = null;
                $.ajax({
                    'async': false,
                    'type': "GET",
                    'global': false,
                    'dataType': 'JSON',
                    'url': "calendarAppointment.php",
                    // 'data': { 'request': "", 'target': 'arrange_url', 'method': 'method_target' },
                    'success': function (data) {
                        tmp = data;
                    }
                });
                return tmp;
            }();
            var t = return_first,
                a = this; a.$calendarObj = new FullCalendar.Calendar(a.$calendar[0],
                    {
                        slotDuration: "00:15:00",
                        slotMinTime: "08:00:00",
                        slotMaxTime: "19:00:00",
                        themeSystem: "bootstrap",
                        bootstrapFontAwesome: !1,
                        buttonText: {
                            today: "Today",
                            month: "Month",
                            week: "Week",
                            day: "Day",
                            list: "List",
                            prev: "Prev",
                            next: "Next"
                        },
                        initialView: "dayGridMonth",
                        handleWindowResize: !0,
                        height: l(window).height() - 200,
                        headerToolbar: {

                            left: "prev,next today",

                            center: "title",

                            right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth"
                        },
                        initialEvents: t,
                        editable: !0,
                        droppable: !0,
                        selectable: !0,
                        dateClick: function (e) {
                            a.onSelect(e)
                        },
                        eventClick: function (e) {
                            a.onEventClick(e)
                        }
                    }),
                    a.$calendarObj.render(), a
                        .$btnNewEvent.on("click",
                            function (e) {
                                a.onSelect({ date: new Date, allDay: !0 })
                            }),
                    a.$formEvent.on("submit", function (e) {
                        e.preventDefault(); var t = a.$formEvent[0]; if (t.checkValidity()) {
                            console.log("Osamaaa", a.$newEventData)

                            var patient_name = l("#patient_name").val()
                            var phone_number = l("#phone_number").val()
                            var notes = l("#notes").val()
                            var time = l("#time").val()
                            var doctor_name = l("#doctor_name").val()
                            var uuid = l("#uuid").val()
                            var date = a.$newEventData.dateStr


                            $.ajax({
                                type: "POST",
                                url: "models/add_appointments.php",
                                data: {
                                    patient_name: patient_name,
                                    phone_number: phone_number,
                                    notes: notes,
                                    time: time,
                                    doctor_name: doctor_name,
                                    date: date,
                                    uuid: uuid
                                },
                                cache: false,
                                success: function (data) {


                                    $('#appointment-table').DataTable().ajax.reload();
                                    Swal.fire
                                        ({
                                            title: "Success !",
                                            text: "Appointment has been Added Successfully!",
                                            icon: "success"
                                        })


                                },
                                error: function (xhr, status, error) {

                                    Swal.fire
                                        ({
                                            title: "Error !",
                                            text: "Not Able To Add Appointment!",
                                            icon: "error"
                                        })

                                    console.error("err", xhr, error);
                                }
                            });

                            if (a.$selectedEvent) a.$selectedEvent.setProp("title", l("#patient_name").val()),
                                a.$selectedEvent.setProp("classNames", [l("#event-category").val()]);
                            else {
                                var n = {
                                    title: l("#patient_name").val(),
                                    start: a.$newEventData.date,
                                    allDay: a.$newEventData.allDay,
                                    className: l("#event-category").val()
                                };
                                a.$calendarObj.addEvent(n)
                            }
                            a.$modal.hide()

                        } else e.stopPropagation(), t.classList.add("was-validated")
                    }),
                    l(a.$btnDeleteEvent.on("click", function (e) {
                        console.log("varr", e)
                        var uuid = l("#uuid").val()
                        // var date = l("#date").val()
                        $.ajax({
                            type: "POST",
                            url: "models/delete_appointments.php",
                            data: {
                                // date:  date,
                                uuid: uuid
                            },
                            cache: false,
                            success: function (data) {

                                console.log("Data", data)

                                $('#appointment-table').DataTable().ajax.reload();
                                Swal.fire
                                    ({
                                        title: "Success !",
                                        text: "Appointment has been Deleted Successfully!",
                                        icon: "success"
                                    })




                            },
                            error: function (xhr, status, error) {

                                Swal.fire
                                    ({
                                        title: "Error !",
                                        text: "Not Able To Remove Appointment!",
                                        icon: "error"
                                    })


                            }
                        });

                        a.$selectedEvent && (a.$selectedEvent.remove(),
                            a.$selectedEvent = null, a
                                .$modal.hide())
                    }))
        }, l.CalendarApp = new e, l.CalendarApp.Constructor = e
}(window.jQuery),
    function (e) { "use strict"; window.jQuery.CalendarApp.init() }();