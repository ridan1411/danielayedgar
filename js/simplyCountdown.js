  // This is an example with default parameters

    simplyCountdown('#cuenta', {
            year: 2024, // required
            month: 2, // required
            day: 10, // required
            hours: 19, // Default is 0 [0-23] integer
            minutes: 30, // Default is 0 [0-59] integer
            seconds: 0, // Default is 0 [0-59] integer
            words: { //words displayed into the countdown
                days: { singular: 'día', plural: 'días' },
                hours: { singular: 'hora', plural: 'horas' },
                minutes: { singular: 'minuto', plural: 'minutos' },
                seconds: { singular: 'segundo', plural: 'segundos' }
            },
            plural: true, //use plurals
            inline: false, //set to true to get an inline basic countdown like : 24 days, 4 hours, 2 minutes, 5 seconds
            inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
            // in case of inline set to false
            enableUtc: true, //Use UTC or not - default : false
            onEnd: function() { 
                //usar funcion para hacer algo cuando termine el contador
                return; 
            }, //Callback on countdown end, put your own function here
            refresh: 1000, // default refresh every 1s
            sectionClass: 'simply-section', //section css class
            amountClass: 'simply-amount', // amount css class
            wordClass: 'simply-word', // word css class
            zeroPad: false,
            countUp: true
    });

    // Also, you can init with already existing Javascript Object.
    let myElement = document.querySelector('.my-countdown');
    simplyCountdown(myElement, { /* options */ });

    let multipleElements = document.querySelectorAll('.my-countdown');
    simplyCountdown(multipleElements, { /* options */ });



/*
        <script>
        var d = new Date(new Date().getTime());

        // default example
        simplyCountdown('.simply-countdown-one', {
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate()
        });

        //jQuery example
        $('#simply-countdown-losange').simplyCountdown({
            year: d.getFullYear(),
            month: d.getMonth() + 1,
            day: d.getDate(),
            enableUtc: false
        });
    </script>
*/