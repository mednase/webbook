<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 09/04/2017
 * Time: 10:22
 */

namespace Webbook\MainBundle\Services;


use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Naming\NamerInterface;

class MediaFileNamer implements NamerInterface
{

    /**
     * Creates a name for the file being uploaded.
     *
     * @param object $object The object the upload is attached to.
     * @param PropertyMapping $mapping The mapping to use to manipulate the given object.
     *
     * @return string The file name.
     */
    public function name($object, PropertyMapping $mapping)
    {
        $file = $object->getMediaFile();
        $extension = $file->getExtension();

        return uniqid('', true).'.'.$extension;
    }


}