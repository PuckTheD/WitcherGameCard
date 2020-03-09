<?php 

/**
 * summary
 */
class TemplatePerso
{

	public string $name;
	public int $lifePoint;
	public int $strong;
	public int $defence;
	public int $spirit;
	public int $stamina;
	public int $experience
	public bool $alive = true;

	if ($this->lifePoint <= 0) {
		$this->alive = false;
	}

    public function physicAttack($perso)
    {
    	$perso->lifePoint -= $this->strong - $perso->defence * rand(0, $perso->defence - 1);
    	$this->experience + rand(2, 5);
    }
}

 ?>