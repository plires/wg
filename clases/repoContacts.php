<?php

abstract class repoContacts {
	public abstract function saveContactLifeInBDD($post);
	public abstract function saveContactAutoInBDD($post);
	public abstract function saveContactAgroInBDD($post);
	public abstract function saveContactPatrimonialesInBDD($post);
	public abstract function saveContactFormContactInBDD($post);
}

?>