<?php
/**
 * @author Sergio Perez <sergio.perez@albatronic.com>
 * @copyright INFORMATICA ALBATRONIC SL
 * @date 03.08.2012 21:15:37
 */

/**
 * @orm:Entity(usuarios)
 */
class Usuarios extends UsuariosEntity {
	public function __toString() {
		return $this->getIDUsuario();
	}
}
?>