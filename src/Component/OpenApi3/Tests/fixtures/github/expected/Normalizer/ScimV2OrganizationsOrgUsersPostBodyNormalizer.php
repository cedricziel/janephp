<?php

namespace Github\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Github\Runtime\Normalizer\CheckArray;
use Github\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpKernel\Kernel;
if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class ScimV2OrganizationsOrgUsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ScimV2OrganizationsOrgUsersPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Github\Model\ScimV2OrganizationsOrgUsersPostBody::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ScimV2OrganizationsOrgUsersPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userName', $data)) {
                $object->setUserName($data['userName']);
                unset($data['userName']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], \Github\Model\ScimV2OrganizationsOrgUsersPostBodyName::class, 'json', $context));
                unset($data['name']);
            }
            if (\array_key_exists('emails', $data)) {
                $values = [];
                foreach ($data['emails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\ScimV2OrganizationsOrgUsersPostBodyEmailsItem::class, 'json', $context);
                }
                $object->setEmails($values);
                unset($data['emails']);
            }
            if (\array_key_exists('schemas', $data)) {
                $values_1 = [];
                foreach ($data['schemas'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSchemas($values_1);
                unset($data['schemas']);
            }
            if (\array_key_exists('displayName', $data)) {
                $object->setDisplayName($data['displayName']);
                unset($data['displayName']);
            }
            if (\array_key_exists('externalId', $data)) {
                $object->setExternalId($data['externalId']);
                unset($data['externalId']);
            }
            if (\array_key_exists('groups', $data)) {
                $values_2 = [];
                foreach ($data['groups'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setGroups($values_2);
                unset($data['groups']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
                unset($data['active']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
                }
            }
            return $object;
        }
        public function normalize(mixed $object, string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['userName'] = $object->getUserName();
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            $values = [];
            foreach ($object->getEmails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['emails'] = $values;
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values_1 = [];
                foreach ($object->getSchemas() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['schemas'] = $values_1;
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['displayName'] = $object->getDisplayName();
            }
            if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
                $data['externalId'] = $object->getExternalId();
            }
            if ($object->isInitialized('groups') && null !== $object->getGroups()) {
                $values_2 = [];
                foreach ($object->getGroups() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['groups'] = $values_2;
            }
            if ($object->isInitialized('active') && null !== $object->getActive()) {
                $data['active'] = $object->getActive();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ScimV2OrganizationsOrgUsersPostBody::class => false];
        }
    }
} else {
    class ScimV2OrganizationsOrgUsersPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ScimV2OrganizationsOrgUsersPostBody::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Github\Model\ScimV2OrganizationsOrgUsersPostBody::class;
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
            $object = new \Github\Model\ScimV2OrganizationsOrgUsersPostBody();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersPostBodyConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('userName', $data)) {
                $object->setUserName($data['userName']);
                unset($data['userName']);
            }
            if (\array_key_exists('name', $data)) {
                $object->setName($this->denormalizer->denormalize($data['name'], \Github\Model\ScimV2OrganizationsOrgUsersPostBodyName::class, 'json', $context));
                unset($data['name']);
            }
            if (\array_key_exists('emails', $data)) {
                $values = [];
                foreach ($data['emails'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\ScimV2OrganizationsOrgUsersPostBodyEmailsItem::class, 'json', $context);
                }
                $object->setEmails($values);
                unset($data['emails']);
            }
            if (\array_key_exists('schemas', $data)) {
                $values_1 = [];
                foreach ($data['schemas'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setSchemas($values_1);
                unset($data['schemas']);
            }
            if (\array_key_exists('displayName', $data)) {
                $object->setDisplayName($data['displayName']);
                unset($data['displayName']);
            }
            if (\array_key_exists('externalId', $data)) {
                $object->setExternalId($data['externalId']);
                unset($data['externalId']);
            }
            if (\array_key_exists('groups', $data)) {
                $values_2 = [];
                foreach ($data['groups'] as $value_2) {
                    $values_2[] = $value_2;
                }
                $object->setGroups($values_2);
                unset($data['groups']);
            }
            if (\array_key_exists('active', $data)) {
                $object->setActive($data['active']);
                unset($data['active']);
            }
            foreach ($data as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_3;
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
            $data['userName'] = $object->getUserName();
            $data['name'] = $this->normalizer->normalize($object->getName(), 'json', $context);
            $values = [];
            foreach ($object->getEmails() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['emails'] = $values;
            if ($object->isInitialized('schemas') && null !== $object->getSchemas()) {
                $values_1 = [];
                foreach ($object->getSchemas() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['schemas'] = $values_1;
            }
            if ($object->isInitialized('displayName') && null !== $object->getDisplayName()) {
                $data['displayName'] = $object->getDisplayName();
            }
            if ($object->isInitialized('externalId') && null !== $object->getExternalId()) {
                $data['externalId'] = $object->getExternalId();
            }
            if ($object->isInitialized('groups') && null !== $object->getGroups()) {
                $values_2 = [];
                foreach ($object->getGroups() as $value_2) {
                    $values_2[] = $value_2;
                }
                $data['groups'] = $values_2;
            }
            if ($object->isInitialized('active') && null !== $object->getActive()) {
                $data['active'] = $object->getActive();
            }
            foreach ($object as $key => $value_3) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_3;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ScimV2OrganizationsOrgUsersPostBodyConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ScimV2OrganizationsOrgUsersPostBody::class => false];
        }
    }
}