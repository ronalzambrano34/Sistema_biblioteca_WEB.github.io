<link rel="stylesheet" type="text/css" href="../css/estilos.css">

<div class="clock ml-auto d-inline-flex text-white" >

                <div class="date">
                    <script type="text/javascript">
                        //<![CDATA[
                        function makeArray() {
                            for (i = 0; i < makeArray.arguments.length; i++)
                                this[i + 1] = makeArray.arguments[i];
                        }
                        var months = new makeArray('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo',
                            'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
                        var date = new Date();
                        var day = date.getDate();
                        var month = date.getMonth() + 1;
                        var yy = date.getYear();
                        var year = (yy < 1000) ? yy + 1900 : yy;
                        document.write(day + " / " + months[month] + " / " + year);
                                        //]]>
                    </script>
                </div>

                <div id="time">
                    <script type="text/javascript">
                        function startTime() {
                            today = new Date();
                            h = today.getHours();
                            m = today.getMinutes();
                            s = today.getSeconds();
                            m = checkTime(m);
                            s = checkTime(s);
                            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
                            t = setTimeout('startTime()', 500);
                        }

                        function checkTime(i) {
                            if (i < 10) {
                                i = "0" + i;
                            }
                            return i;
                        }
                        window.onload = function () {
                            startTime();
                        }
                    </script>
                </div>
            </div>
