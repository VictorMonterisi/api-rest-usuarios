<?php 

    namespace Victo\ApiRestExercicio\Services;

    use Victo\ApiRestExercicio\Models\Usuario;

    class UsuarioService
    {
        public function get($id = null) {
            if ($id) {
                return Usuario::selectUsuario($id);
            } else {
                return Usuario::selectTodosUsuarios();
            }
        }

        public function post() {
            
        }

        public function update() {
            
        }

        public function delete() {
            
        }
    }