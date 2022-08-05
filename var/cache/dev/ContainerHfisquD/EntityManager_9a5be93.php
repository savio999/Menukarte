<?php

namespace ContainerHfisquD;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7706d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer698a7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties21563 = [
        
    ];

    public function getConnection()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getConnection', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getMetadataFactory', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getExpressionBuilder', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'beginTransaction', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getCache', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getCache();
    }

    public function transactional($func)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'transactional', array('func' => $func), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'wrapInTransaction', array('func' => $func), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'commit', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->commit();
    }

    public function rollback()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'rollback', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getClassMetadata', array('className' => $className), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'createQuery', array('dql' => $dql), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'createNamedQuery', array('name' => $name), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'createQueryBuilder', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'flush', array('entity' => $entity), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'clear', array('entityName' => $entityName), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->clear($entityName);
    }

    public function close()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'close', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->close();
    }

    public function persist($entity)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'persist', array('entity' => $entity), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'remove', array('entity' => $entity), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'refresh', array('entity' => $entity), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'detach', array('entity' => $entity), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'merge', array('entity' => $entity), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getRepository', array('entityName' => $entityName), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'contains', array('entity' => $entity), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getEventManager', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getConfiguration', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'isOpen', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getUnitOfWork', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getProxyFactory', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'initializeObject', array('obj' => $obj), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'getFilters', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'isFiltersStateClean', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'hasFilters', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return $this->valueHolder7706d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer698a7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder7706d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7706d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7706d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, '__get', ['name' => $name], $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        if (isset(self::$publicProperties21563[$name])) {
            return $this->valueHolder7706d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7706d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7706d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7706d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7706d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, '__isset', array('name' => $name), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7706d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7706d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, '__unset', array('name' => $name), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7706d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7706d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, '__clone', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        $this->valueHolder7706d = clone $this->valueHolder7706d;
    }

    public function __sleep()
    {
        $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, '__sleep', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;

        return array('valueHolder7706d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer698a7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer698a7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer698a7 && ($this->initializer698a7->__invoke($valueHolder7706d, $this, 'initializeProxy', array(), $this->initializer698a7) || 1) && $this->valueHolder7706d = $valueHolder7706d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7706d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7706d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
