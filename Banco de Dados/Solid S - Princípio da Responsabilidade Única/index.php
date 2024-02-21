<?php 
class UsuarioS /* Maneira errada para o Principio S da sigla SOLID */
{ 
    public function setNome()
    {
    }
    public function getNome()
    {
    }
    public function add()
    {
    }
    public function update()
    {
    }
    public function delete()
    {
    }
}
class Usuario /*Maneira correta */
{ 
    public function setNome()
    {
    }
    public function getNome()
    {
    }
}
class UsuarioDb /*Maneira correta/2 */
{ 
    public function add(Usuario $u)
    {
    }
    public function update(Usuario $u)
    {
    }
    public function delete($id)
    {
    }
}
