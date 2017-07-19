<?php

namespace Core\LibBundle\Generator\EntityGenerator;

use Doctrine\ORM\Tools\EntityGenerator;
class Entity extends EntityGenerator
{
    /**
     * @var string
     */
    protected static $classTemplate =
'<?php

<namespace>
<useStatement>
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
<entityAnnotation>
<entityClassName>
{
    use ORMBehaviors\SoftDeletable\SoftDeletable;
	use ORMBehaviors\Blameable\Blameable;
    use ORMBehaviors\Timestampable\Timestampable;
<entityBody>

	public function __construct(){
	    $this->token = sha1(rand(11111, 99999).date(\'d-m-Y\').time());
	}

	public function __toString(){
		return $this->token;
	}
}
';
}
