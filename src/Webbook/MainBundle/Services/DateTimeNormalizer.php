<?php
/**
 * Created by PhpStorm.
 * User: medna
 * Date: 28/02/2017
 * Time: 10:43
 */

namespace Webbook\MainBundle\Services;


use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Normalizer\SerializerAwareNormalizer;

class DateTimeNormalizer extends SerializerAwareNormalizer implements NormalizerInterface, DenormalizerInterface
{
    /**
     * {@inheritdoc}
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $result=$object->format('H:i Y-m-d');
        $currentDate = new \DateTime();
        $dateDiff=$currentDate->diff($object);
        $hour_diff = $dateDiff->format('%H');
        $min_diff = $dateDiff->format('%i');

        if ($hour_diff > 0 && $hour_diff<25) {
            if($hour_diff==1)
                return 'depuis une heure';
            else
                return 'depuis '.$hour_diff.' heures';

        } elseif ($hour_diff ==0) {
            if ($min_diff < 1)
                $result = "il ya quelques secondes";
            elseif ($min_diff < 10)
                $result = "depuis quelques minutes";
            else
                $result = 'il ya '.$min_diff.' minutes';
        }
        return $result;
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        return new $class($data);
    }

    /**
     * Checks if the given class is a DateTime.
     *
     * @param mixed  $data   Data to normalize.
     * @param string $format The format being (de-)serialized from or into.
     *
     * @return bool
     */
    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \DateTime;
    }

    /**
     * Checks if the given class is a DateTime.
     *
     * @param mixed  $data   Data to denormalize from.
     * @param string $type   The class to which the data should be denormalized.
     * @param string $format The format being deserialized from.
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        $class = new \ReflectionClass($type);

        return $class->isSubclassOf('\DateTime');
    }
}