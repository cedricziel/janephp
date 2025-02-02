<?php

namespace PicturePark\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use PicturePark\API\Runtime\Normalizer\CheckArray;
use PicturePark\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class DisplayValueStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\DisplayValueStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\DisplayValueStatus::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\DisplayValueStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] !== null) {
                $values = [];
                foreach ($data['contentOrLayerSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentOrLayerSchemaIds($values);
            }
            elseif (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] === null) {
                $object->setContentOrLayerSchemaIds(null);
            }
            if (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['listSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setListSchemaIds($values_1);
            }
            elseif (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] === null) {
                $object->setListSchemaIds(null);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('contentOrLayerSchemaIds') && null !== $object->getContentOrLayerSchemaIds()) {
                $values = [];
                foreach ($object->getContentOrLayerSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['contentOrLayerSchemaIds'] = $values;
            }
            if ($object->isInitialized('listSchemaIds') && null !== $object->getListSchemaIds()) {
                $values_1 = [];
                foreach ($object->getListSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['listSchemaIds'] = $values_1;
            }
            $data['state'] = $object->getState();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\DisplayValueStatus::class => false];
        }
    }
} else {
    class DisplayValueStatusNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \PicturePark\API\Model\DisplayValueStatus::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === PicturePark\API\Model\DisplayValueStatus::class;
        }
        /**
         * @return mixed
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \PicturePark\API\Model\DisplayValueStatus();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] !== null) {
                $values = [];
                foreach ($data['contentOrLayerSchemaIds'] as $value) {
                    $values[] = $value;
                }
                $object->setContentOrLayerSchemaIds($values);
            }
            elseif (\array_key_exists('contentOrLayerSchemaIds', $data) && $data['contentOrLayerSchemaIds'] === null) {
                $object->setContentOrLayerSchemaIds(null);
            }
            if (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] !== null) {
                $values_1 = [];
                foreach ($data['listSchemaIds'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setListSchemaIds($values_1);
            }
            elseif (\array_key_exists('listSchemaIds', $data) && $data['listSchemaIds'] === null) {
                $object->setListSchemaIds(null);
            }
            if (\array_key_exists('state', $data)) {
                $object->setState($data['state']);
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('contentOrLayerSchemaIds') && null !== $object->getContentOrLayerSchemaIds()) {
                $values = [];
                foreach ($object->getContentOrLayerSchemaIds() as $value) {
                    $values[] = $value;
                }
                $data['contentOrLayerSchemaIds'] = $values;
            }
            if ($object->isInitialized('listSchemaIds') && null !== $object->getListSchemaIds()) {
                $values_1 = [];
                foreach ($object->getListSchemaIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['listSchemaIds'] = $values_1;
            }
            $data['state'] = $object->getState();
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\PicturePark\API\Model\DisplayValueStatus::class => false];
        }
    }
}