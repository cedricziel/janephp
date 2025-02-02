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
    class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('firstName', $data)) {
                $object->setFirstName($data['firstName']);
                unset($data['firstName']);
            }
            if (\array_key_exists('surname', $data)) {
                $object->setSurname($data['surname']);
                unset($data['surname']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress::class, 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('gender', $data)) {
                $object->setGender($data['gender']);
                unset($data['gender']);
            }
            if (\array_key_exists('dateOfBirth', $data)) {
                $object->setDateOfBirth($data['dateOfBirth']);
                unset($data['dateOfBirth']);
            }
            if (\array_key_exists('directorType', $data)) {
                $object->setDirectorType($data['directorType']);
                unset($data['directorType']);
            }
            if (\array_key_exists('positions', $data)) {
                $values = [];
                foreach ($data['positions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem::class, 'json', $context);
                }
                $object->setPositions($values);
                unset($data['positions']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('surname') && null !== $object->getSurname()) {
                $data['surname'] = $object->getSurname();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('gender') && null !== $object->getGender()) {
                $data['gender'] = $object->getGender();
            }
            if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
                $data['dateOfBirth'] = $object->getDateOfBirth();
            }
            if ($object->isInitialized('directorType') && null !== $object->getDirectorType()) {
                $data['directorType'] = $object->getDirectorType();
            }
            if ($object->isInitialized('positions') && null !== $object->getPositions()) {
                $values = [];
                foreach ($object->getPositions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['positions'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class => false];
        }
    }
} else {
    class GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class;
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
            $object = new \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data)) {
                $object->setId($data['id']);
                unset($data['id']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($data['name']);
                unset($data['name']);
            }
            if (\array_key_exists('title', $data)) {
                $object->setTitle($data['title']);
                unset($data['title']);
            }
            if (\array_key_exists('firstName', $data)) {
                $object->setFirstName($data['firstName']);
                unset($data['firstName']);
            }
            if (\array_key_exists('surname', $data)) {
                $object->setSurname($data['surname']);
                unset($data['surname']);
            }
            if (\array_key_exists('address', $data)) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemAddress::class, 'json', $context));
                unset($data['address']);
            }
            if (\array_key_exists('gender', $data)) {
                $object->setGender($data['gender']);
                unset($data['gender']);
            }
            if (\array_key_exists('dateOfBirth', $data)) {
                $object->setDateOfBirth($data['dateOfBirth']);
                unset($data['dateOfBirth']);
            }
            if (\array_key_exists('directorType', $data)) {
                $object->setDirectorType($data['directorType']);
                unset($data['directorType']);
            }
            if (\array_key_exists('positions', $data)) {
                $values = [];
                foreach ($data['positions'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItemPositionsItem::class, 'json', $context);
                }
                $object->setPositions($values);
                unset($data['positions']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('name') && null !== $object->getName()) {
                $data['name'] = $object->getName();
            }
            if ($object->isInitialized('title') && null !== $object->getTitle()) {
                $data['title'] = $object->getTitle();
            }
            if ($object->isInitialized('firstName') && null !== $object->getFirstName()) {
                $data['firstName'] = $object->getFirstName();
            }
            if ($object->isInitialized('surname') && null !== $object->getSurname()) {
                $data['surname'] = $object->getSurname();
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            if ($object->isInitialized('gender') && null !== $object->getGender()) {
                $data['gender'] = $object->getGender();
            }
            if ($object->isInitialized('dateOfBirth') && null !== $object->getDateOfBirth()) {
                $data['dateOfBirth'] = $object->getDateOfBirth();
            }
            if ($object->isInitialized('directorType') && null !== $object->getDirectorType()) {
                $data['directorType'] = $object->getDirectorType();
            }
            if ($object->isInitialized('positions') && null !== $object->getPositions()) {
                $values = [];
                foreach ($object->getPositions() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['positions'] = $values;
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\CreditSafe\API\Model\GbCompanyReportExampleResponseReportDirectorsCurrentDirectorsItem::class => false];
        }
    }
}