<h1>Ini Calon Siswa</h1>
<h1><?php if(session()->get('level') == 1){
    echo "Admin";
    }else{
        echo "Calon Siswa";
    }  ?></h1>