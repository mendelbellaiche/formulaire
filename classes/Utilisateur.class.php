
<?php

    class Utilisateur {

        private $nom;
        private $prenom;
        private $email;
        private $pwd;
        private $modechauffage;
        private $superficie;

        function __constructor() {}

        public function getNom() {
            return $this->nom;
        }

        public function setNom($nom) {
            $this->nom = $nom;
        }

        public function getPrenom() {
            return $this->prenom;
        }

        public function setPrenom($prenom) {
            $this->prenom = $prenom;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getPwd() {
            return $this->prenom;
        }

        public function setPwd($pwd) {
            $this->pwd = $pwd;
        }

        public function getModeChauffage() {
            return $this->modechauffage;
        }

        public function setModeChauffage($modechauffage) {
            $this->modechauffage = $modechauffage;
        }

        public function getSuperficie() {
            return $this->superficie;
        }

        public function setSuperficie($superficie) {
            $this->superficie = $superficie;
        }

        public function __serialize(): array {
            return [
              'nom' => $this->nom,
              'prenom' => $this->prenom,
              'email' => $this->email,
              'pwd' => $this->pwd,
              'modechauffage' => $this->modechauffage,
              'superficie' => $this->superficie,
            ];
        }

        public function __unserialize(array $data): void{
            $this->nom = $data['nom'];
            $this->prenom = $data['prenom'];
            $this->email = $data['email'];
            $this->pwd = $data['pwd'];
            $this->modechauffage = $data['modechauffage'];
            $this->superficie = $data['superficie'];
        }

        public function __toString() {
            return "Utilisateur[nom=".$this->nom.",
            prenom=".$this->prenom.",
            email=".$this->email.",
            pwd=".$this->pwd.",
            modechauffage=".$this->modechauffage.",
            superficie=".$this->superficie."]";
        }
    }
 ?>
