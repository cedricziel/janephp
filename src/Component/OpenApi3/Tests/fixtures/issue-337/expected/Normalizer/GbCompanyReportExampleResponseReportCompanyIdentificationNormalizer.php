<?php

namespace CreditSafe\API\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use CreditSafe\API\Runtime\Normalizer\CheckArray;
use CreditSafe\API\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GbCompanyReportExampleResponseReportCompanyIdentificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('basicInformation', $data)) {
                $object->setBasicInformation($this->denormalizer->denormalize($data['basicInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class, 'json', $context));
                unset($data['basicInformation']);
            }
            if (\array_key_exists('activityClassifications', $data)) {
                $values = [];
                foreach ($data['activityClassifications'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem::class, 'json', $context);
                }
                $object->setActivityClassifications($values);
                unset($data['activityClassifications']);
            }
            if (\array_key_exists('previousNames', $data)) {
                $values_1 = [];
                foreach ($data['previousNames'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem::class, 'json', $context);
                }
                $object->setPreviousNames($values_1);
                unset($data['previousNames']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('basicInformation') && null !== $object->getBasicInformation()) {
                $data['basicInformation'] = $this->normalizer->normalize($object->getBasicInformation(), 'json', $context);
            }
            if ($object->isInitialized('activityClassifications') && null !== $object->getActivityClassifications()) {
                $values = [];
                foreach ($object->getActivityClassifications() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['activityClassifications'] = $values;
            }
            if ($object->isInitialized('previousNames') && null !== $object->getPreviousNames()) {
                $values_1 = [];
                foreach ($object->getPreviousNames() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['previousNames'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportCompanyIdentificationNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class;
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('basicInformation', $data)) {
                $object->setBasicInformation($this->denormalizer->denormalize($data['basicInformation'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationBasicInformation::class, 'json', $context));
                unset($data['basicInformation']);
            }
            if (\array_key_exists('activityClassifications', $data)) {
                $values = [];
                foreach ($data['activityClassifications'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationActivityClassificationsItem::class, 'json', $context);
                }
                $object->setActivityClassifications($values);
                unset($data['activityClassifications']);
            }
            if (\array_key_exists('previousNames', $data)) {
                $values_1 = [];
                foreach ($data['previousNames'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentificationPreviousNamesItem::class, 'json', $context);
                }
                $object->setPreviousNames($values_1);
                unset($data['previousNames']);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
                }
            }
            return $object;
        }
        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('basicInformation') && null !== $object->getBasicInformation()) {
                $data['basicInformation'] = $this->normalizer->normalize($object->getBasicInformation(), 'json', $context);
            }
            if ($object->isInitialized('activityClassifications') && null !== $object->getActivityClassifications()) {
                $values = [];
                foreach ($object->getActivityClassifications() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['activityClassifications'] = $values;
            }
            if ($object->isInitialized('previousNames') && null !== $object->getPreviousNames()) {
                $values_1 = [];
                foreach ($object->getPreviousNames() as $value_1) {
                    $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
                }
                $data['previousNames'] = $values_1;
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportCompanyIdentification::class => false];
        }
    }
}