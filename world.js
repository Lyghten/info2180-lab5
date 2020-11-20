window.onload = function() {


    var btn = document.getElementById("lookup");


    btn.addEventListener("click", appears);
    btn_2.addEventListener("click", appearing)


    function appears() {

        var tables = document.getElementById("country").value
        var url = "world.php?country = " + tables;
        var ourRequest = new XMLHttpRequest();
        ourRequest.open("GET", url, true);
        ourRequest.send();


        console.log("clicking")


        htmlRequest.onreadystatechange = function() {
            if (htmlRequest.readyState === XMLHttpRequest.DONE) {
                if (ourRequest.status === 200) {
                    document.getElementById("result").innerHTML = this.responseText;

                }

            }

        }

    }

}