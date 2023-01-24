<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SpecShaperEncryptConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $method;
    private $subscriberClass;
    private $isDisabled;
    private $annotationClasses;
    private $_usedProperties = [];

    /**
     * @default 'OpenSSL'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function method($value): static
    {
        $this->_usedProperties['method'] = true;
        $this->method = $value;

        return $this;
    }

    /**
     * @default 'SpecShaper\\EncryptBundle\\Subscribers\\DoctrineEncryptSubscriber'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function subscriberClass($value): static
    {
        $this->_usedProperties['subscriberClass'] = true;
        $this->subscriberClass = $value;

        return $this;
    }

    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function isDisabled($value): static
    {
        $this->_usedProperties['isDisabled'] = true;
        $this->isDisabled = $value;

        return $this;
    }

    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function annotationClasses(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['annotationClasses'] = true;
        $this->annotationClasses = $value;

        return $this;
    }

    public function getExtensionAlias(): string
    {
        return 'spec_shaper_encrypt';
    }

    public function __construct(array $value = [])
    {
        if (array_key_exists('method', $value)) {
            $this->_usedProperties['method'] = true;
            $this->method = $value['method'];
            unset($value['method']);
        }

        if (array_key_exists('subscriber_class', $value)) {
            $this->_usedProperties['subscriberClass'] = true;
            $this->subscriberClass = $value['subscriber_class'];
            unset($value['subscriber_class']);
        }

        if (array_key_exists('is_disabled', $value)) {
            $this->_usedProperties['isDisabled'] = true;
            $this->isDisabled = $value['is_disabled'];
            unset($value['is_disabled']);
        }

        if (array_key_exists('annotation_classes', $value)) {
            $this->_usedProperties['annotationClasses'] = true;
            $this->annotationClasses = $value['annotation_classes'];
            unset($value['annotation_classes']);
        }

        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }

    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['method'])) {
            $output['method'] = $this->method;
        }
        if (isset($this->_usedProperties['subscriberClass'])) {
            $output['subscriber_class'] = $this->subscriberClass;
        }
        if (isset($this->_usedProperties['isDisabled'])) {
            $output['is_disabled'] = $this->isDisabled;
        }
        if (isset($this->_usedProperties['annotationClasses'])) {
            $output['annotation_classes'] = $this->annotationClasses;
        }

        return $output;
    }

}
