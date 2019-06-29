

function f_bukatabel(){
    $.get("index.php?menu=bukatabel",
        function($data){
            $data=f_split($data);
            $("#kotak").html($data);
        }
    );
}

function f_split($data){
    $data=$data.split("@|@");
    $data.shift();
    $data.pop();
    return $data;
}


