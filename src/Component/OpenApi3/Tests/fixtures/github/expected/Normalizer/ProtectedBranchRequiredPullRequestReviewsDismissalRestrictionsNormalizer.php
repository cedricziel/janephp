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
    class ProtectedBranchRequiredPullRequestReviewsDismissalRestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization(mixed $data, string $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class;
        }
        public function denormalize(mixed $data, string $type, string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictionsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('users_url', $data)) {
                $object->setUsersUrl($data['users_url']);
                unset($data['users_url']);
            }
            if (\array_key_exists('teams_url', $data)) {
                $object->setTeamsUrl($data['teams_url']);
                unset($data['teams_url']);
            }
            if (\array_key_exists('users', $data)) {
                $values = [];
                foreach ($data['users'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\SimpleUser::class, 'json', $context);
                }
                $object->setUsers($values);
                unset($data['users']);
            }
            if (\array_key_exists('teams', $data)) {
                $values_1 = [];
                foreach ($data['teams'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\Team::class, 'json', $context);
                }
                $object->setTeams($values_1);
                unset($data['teams']);
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
            $data['url'] = $object->getUrl();
            $data['users_url'] = $object->getUsersUrl();
            $data['teams_url'] = $object->getTeamsUrl();
            $values = [];
            foreach ($object->getUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['users'] = $values;
            $values_1 = [];
            foreach ($object->getTeams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['teams'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictionsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class => false];
        }
    }
} else {
    class ProtectedBranchRequiredPullRequestReviewsDismissalRestrictionsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;
        public function supportsDenormalization($data, $type, string $format = null, array $context = []): bool
        {
            return $type === \Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class;
        }
        public function supportsNormalization(mixed $data, string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class;
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
            $object = new \Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions();
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictionsConstraint());
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('url', $data)) {
                $object->setUrl($data['url']);
                unset($data['url']);
            }
            if (\array_key_exists('users_url', $data)) {
                $object->setUsersUrl($data['users_url']);
                unset($data['users_url']);
            }
            if (\array_key_exists('teams_url', $data)) {
                $object->setTeamsUrl($data['teams_url']);
                unset($data['teams_url']);
            }
            if (\array_key_exists('users', $data)) {
                $values = [];
                foreach ($data['users'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \Github\Model\SimpleUser::class, 'json', $context);
                }
                $object->setUsers($values);
                unset($data['users']);
            }
            if (\array_key_exists('teams', $data)) {
                $values_1 = [];
                foreach ($data['teams'] as $value_1) {
                    $values_1[] = $this->denormalizer->denormalize($value_1, \Github\Model\Team::class, 'json', $context);
                }
                $object->setTeams($values_1);
                unset($data['teams']);
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
            $data['url'] = $object->getUrl();
            $data['users_url'] = $object->getUsersUrl();
            $data['teams_url'] = $object->getTeamsUrl();
            $values = [];
            foreach ($object->getUsers() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['users'] = $values;
            $values_1 = [];
            foreach ($object->getTeams() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data['teams'] = $values_1;
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }
            if (!($context['skip_validation'] ?? false)) {
                $this->validate($data, new \Github\Validator\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictionsConstraint());
            }
            return $data;
        }
        public function getSupportedTypes(?string $format = null): array
        {
            return [\Github\Model\ProtectedBranchRequiredPullRequestReviewsDismissalRestrictions::class => false];
        }
    }
}