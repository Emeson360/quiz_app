<?php


function success_alert ($msg) {
    echo "
        <div class='bg-success py-2 px-3 text-white rounded-pill' id='thisAlert'>
            ".$msg."
        </div>
        <script>
            let elem = document.getElementById('thisAlert')
            setTimeout(() => {
                elem.style.display = 'none'
            }, 7000)
        </script>
    ";
}

function success_alert_20 ($msg) {
    echo "
        <div class='bg-success py-2 px-3 text-white rounded-pill' id='thisAlert'>
            ".$msg."
        </div>
        <script>
            let elem = document.getElementById('thisAlert')
            setTimeout(() => {
                elem.style.display = 'none'
            }, 20000)
        </script>
    ";
}

function success_alert_unlimited ($msg) {
    echo "
        <div class='bg-success py-2 px-3 text-white rounded-pill' id='thisAlert'>
            ".$msg."
        </div>

    ";
}

function danger_alert ($msg) {
    echo "
        <div class='bg-danger py-2 px-3 text-white rounded-pill' id='thisAlert'>
            ".$msg."
        </div>
        <script>
            let elem = document.getElementById('thisAlert')
            setTimeout(() => {
                elem.style.display = 'none'
            }, 7000)
        </script>
    ";
}

function danger_alert_20 ($msg) {
    echo "
        <div class='bg-danger py-2 px-3 text-white rounded-pill' id='thisAlert'>
            ".$msg."
        </div>
        <script>
            let elem = document.getElementById('thisAlert')
            setTimeout(() => {
                elem.style.display = 'none'
            }, 20000)
        </script>
    ";
}

function danger_alert_unlimited ($msg) {
    echo "
        <div class='bg-danger py-2 px-3 text-white rounded-pill' id='thisAlert'>
            ".$msg."
        </div>
        
    ";
}