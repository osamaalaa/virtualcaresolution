!function (l) {
    "use strict"; var e = function () {
        this.$body = l("body"), this.$modal = l("#event-modal"),
        this.$calendar = l("#calendar"),
         this.$formEvent = l("#form-appointments"),
        this.$btnNewEvent = l("#btn-new-event"), this.$btnDeleteEvent = l("#btn-delete-event"),
        this.$btnSaveEvent = l("#btn-save-event"), this.$modalTitle = l("#modal-title"),
        this.$calendarObj = null, this.$selectedEvent = null, this.$newEventData = null
    };
    e.prototype.onEventClick = function (e) {
        this.$formEvent[0].reset()
        , this.$formEvent.removeClass("was-validated"),
        this.$newEventData = null, this.$btnDeleteEvent.show()
        this.$modalTitle.text("Edit Event"), this.$modal.show(),
            this.$selectedEvent = e.event, l("#patient_name").val(this.$selectedEvent.title),
            l("#event-category").val(this.$selectedEvent.classNames[0])
    },
        e.prototype.onSelect = function (e) {
            this.$formEvent[0].reset(),
            this.$formEvent.removeClass("was-validated"),
            this.$selectedEvent = null, this.$newEventData = e, this.$btnDeleteEvent.hide(),
            this.$modalTitle.text("Add New Appointment"),
            this.$modal.show(), this.$calendarObj.unselect()
        },
        e.prototype.init = function () {
            this.$modal = new bootstrap.Modal(document.getElementById("event-modal"),
                { keyboard: !1 }); var e = new Date(l.now());
            new FullCalendar.Draggable(document.getElementById("external-events"), {
                itemSelector: ".external-event",
                eventData: function (e) { return { title: e.innerText, className: l(e).data("class") } }
            });
            var t = [],
                a = this; a.$calendarObj = new FullCalendar.Calendar(a.$calendar[0],
                    { slotDuration: "00:15:00", slotMinTime: "08:00:00", slotMaxTime: "19:00:00", themeSystem: "bootstrap", bootstrapFontAwesome: !1, buttonText: { today: "Today", month: "Month", week: "Week", day: "Day", list: "List", prev: "Prev", next: "Next" }, initialView: "dayGridMonth", handleWindowResize: !0, height: l(window).height() - 200, headerToolbar: { left: "prev,next today", center: "title", right: "dayGridMonth,timeGridWeek,timeGridDay,listMonth" }, 
                    initialEvents: t, editable: !0, droppable: !0, selectable: !0,
                     dateClick: function (e) { a.onSelect(e) }, eventClick: function (e) { a.onEventClick(e) } }),
                    a.$calendarObj.render(), a
                        .$btnNewEvent.on("click",
                            function (e) { a.onSelect({ date: new Date, allDay: !0 }) }),
                    a.$formEvent.on("submit", function (e) {
                        e.preventDefault(); var t = a.$formEvent[0]; if (t.checkValidity()) {
                            console.log("Osamaaa" ,  a  , l("#time").val() )

                            var patient_name = l("#patient_name").val()
                            var phone_number = l("#phone_number").val()
                            var notes = l("#notes").val()
                            var time = l("#time").val()
                            var doctor_name = l("#doctor_name").val()
                            var date = a.$newEventData.date
                            
                            $.ajax({
                                type: "POST",
                                url: "models/add_appointments.php",
                                data: {
                                    patient_name: patient_name,
                                    phone_number: phone_number,
                                    notes: notes,
                                    time: time,
                                    doctor_name: doctor_name,
                                    date: date
                                },
                                cache: false,
                                success: function(data) {
                                    console.log("osma.hr" , data)
                                },
                                error: function(xhr, status, error) {
                                    console.error("err", xhr , error);
                                }
                            });

                            if (a.$selectedEvent) a.$selectedEvent.setProp("title", l("#patient_name").val()),
                                a.$selectedEvent.setProp("classNames", [l("#event-category").val()]);
                            else { var n = { title: l("#patient_name").val(), start: a.$newEventData.date, allDay: a.$newEventData.allDay, className: l("#event-category").val() }; a.$calendarObj.addEvent(n) }
                            a.$modal.hide()
                          
                        } else e.stopPropagation(), t.classList.add("was-validated")
                    }),
                    l(a.$btnDeleteEvent.on("click", function (e) {
                        a.$selectedEvent && (a.$selectedEvent.remove(),
                            a.$selectedEvent = null, a.$modal.hide())
                    }))
        }, l.CalendarApp = new e, l.CalendarApp.Constructor = e
}(window.jQuery),
    function (e) { "use strict"; window.jQuery.CalendarApp.init() }();