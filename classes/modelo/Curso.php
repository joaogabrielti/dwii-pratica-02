<?php
    include_once '../../global.php';

    class Curso extends BD {
        public static $tabela = 'tb_cursos';

        public static function get() {
			return parent::selectAll(self::$tabela, "ORDER BY nome");
        }

        public static function find($id) {
            return parent::selectFind(self::$tabela, "id = $id");
        }

        public static function add($dados) {
            return parent::insert(self::$tabela, $dados);
        }

        public static function up($id, $dados) {
            return parent::update(self::$tabela, $dados, "id = $id");
        }

        public static function del($id) {
            return parent::delete(self::$tabela, "id = $id");
        }
    }
