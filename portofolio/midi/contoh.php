<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"> 
        <title>The MidiPlayer Javascript class to play MIDI</title>
        
        <script src="js/midi.js"></script>
        <script type="text/javascript">
        var mp1, mp2;

        function init() {
            // Example 1. This will loop 5 times, and has a callback function at the end.
            var callback = function() { document.getElementById('btn1').value = 'play'; }
            mp1 = new MidiPlayer('Saved.mid', 'btn1', true, 5, callback);
            mp1.setDebugDiv('msg');

            // Example 2. This will not loop.
            mp2 = new MidiPlayer('Bach_Badinerie.mid', 'btn2'); 
        }

        function doPlay(m, btn) {
            if (btn.value == 'play') {
                m.play();
                btn.value = 'stop';
            }
            else {
                m.stop();
                btn.value = 'play';
            }
        }
        
        function do_clear() { 
    	    document.getElementById('msg').innerHTML=''; 
    	    document.getElementById('div_clear').style.display='none';
    	}
    	function show_clear() {
            document.getElementById('div_clear').style.display='block';
    	}
        </script>

    </head>

    <body onload="javascript:init();">
        <div id="article">
            <div id="container">

            Bach.mid: <input type="button" value="play" id="btn2" onclick="doPlay(mp2, this);"><br><br>
                    

            </div>
        </div> 
    </body>
</html>