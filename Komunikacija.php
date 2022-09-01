<?php 
    class Komunikacija{
        public $conn;
        public function __construct($conn){
            $this->conn=$conn;
        }

        public function vratiSvePostove(){
            $upit="SELECT * FROM post";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $postovi = array();
            foreach($niz as $element){
                
                $post= new Postt();
               
                $post->id=$element["id"];
                $post->naslov=$element["naslov"];
                $post->tekst=$element["tekst"];
                $post->datum=$element["datum"];
               
                $postovi[]=$post;
                
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
            return $postovi;
        }

        public function pretraziPost($pretraga){
           /* $upit='SELECT * FROM post WHERE naslov='. $pretraga;*/
           $upit="SELECT * FROM post WHERE naslov like '%.$pretraga.%'   ";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $postovi = array();
            foreach($niz as $element){
                if($pretraga == $element["naslov"]){
                $post= new Postt();
               
                $post->id=$element["id"];
                $post->naslov=$element["naslov"];
                $post->tekst=$element["tekst"];
                $post->datum=$element["datum"];
               
                $postovi[]=$post;
                }
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
            return $postovi;
        }

        public function unesiPost($post){
            $naslov=$post->naslov;
            $tekst=$post->tekst;

            $upit = "INSERT INTO post(naslov, tekst) VALUES('$naslov','$tekst')";
            $rezultat = $this->conn->query($upit);
        }

        public function obrisiPost($post){
            $upit="DELETE FROM post WHERE id=$post->id";
            $rezultat=mysqli_query($this->conn,$upit);
            return $rezultat;
        }

        public function vratiJedanPost($id){
            $upit="SELECT * FROM post WHERE id=$id";
            $rezultat = mysqli_query($this->conn,$upit);
            $niz = mysqli_fetch_assoc($rezultat);

            $post = new Postt();
            $post->id = $niz['id'];
            $post->naslov=$niz['naslov'];
            $post->tekst=$niz['tekst'];
            $post->datum =$niz['datum'];

            return $post;
        }
        

        public function izmeniPost($post){

            $upit ="UPDATE post SET naslov ='$post->naslov',
                                    tekst='$post->tekst',
                                    WHERE id ='$post->id'";
            $rezultat=mysqli_query($this->conn,$upit);                        
   // return $rezultat;
        }

        public function sortirajPostove($sort){
            $upit ='SELECT * FROM post ORDER BY  datum '.$sort;
            $rezultat=mysqli_query($this->conn,$upit);
            $niz=mysqli_fetch_all($rezultat,MYSQLI_ASSOC);
            $postovi = array();

            foreach($niz as $element){
                $post = new Postt();
                $post->id =$element["id"];
                $post->naslov =$element["naslov"];
                $post->tekst=$element["tekst"];
                $post->datum =$element["datum"];

                $postovi[]=$post;
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
            return $postovi;
        }

        public function ubaciKomentar($komentar){
            $ime=$komentar->ime;
            $komentar=$komentar->komentar;
            $postid=$komentar->postid;
        
            $upit = "INSERT INTO komentar(ime,komentar,postid) VALUES ('$ime','$komentar','$postid')";
            $rezultat = $this->conn->query($upit);
        }

        public function ubaciPoruku($poruka){
            $ime=$poruka->ime;
            $email=$poruka->email;
            $poruka=$poruka->poruka;
        
            $upit = "INSERT INTO `poruka`( `ime`, `email`, `poruka`) VALUES ('$ime','$email','$poruka')";
            $rezultat = $this->conn->query($upit);
        }

        public function prikaziKomentare($id){
            $upit="SELECT `komentar`, `ime` FROM `komentar` k JOIN `post` p ON k.postid=p.id WHERE postid ='$id'";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $komentari = array();
            foreach($niz as $element){
                
                $komentar= new Komentar();
               
                $komentar->komentar=$element["komentar"];
                $komentar->ime=$element["ime"];
               
               
                $komentari[]=$komentar;
                
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
            return $komentari;
        }

        public function prikaziPoruke(){
            $upit="SELECT * FROM poruka";
            $rezultat=mysqli_query($this->conn, $upit);
            $niz=mysqli_fetch_all($rezultat, MYSQLI_ASSOC);
            $poruke = array();
            foreach($niz as $element){
                
                $poruka= new Poruka();
               
                $poruka->id=$element["id"];
                $poruka->ime=$element["ime"];
                $poruka->email=$element["email"];
                $poruka->poruka=$element["poruka"];
                $poruka->datum=$element["datum"];
                $poruke[]=$poruka;
                
            }
            mysqli_free_result($rezultat);
            mysqli_close($this->conn);
            return $poruke;
        }

        public function obrisiPoruku($poruka){
            $upit="DELETE FROM poruka WHERE id=$poruka->id";
            $rezultat=mysqli_query($this->conn,$upit);
            return $rezultat;
        }
        
        
    }

   

    



?>