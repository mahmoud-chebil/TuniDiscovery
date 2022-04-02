<?php

namespace ContainerIQW21yE;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder66da2 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb1771 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese4a6d = [
        
    ];

    public function getConnection()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getConnection', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getMetadataFactory', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getExpressionBuilder', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'beginTransaction', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getCache', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'transactional', array('func' => $func), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'commit', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->commit();
    }

    public function rollback()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'rollback', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'createQuery', array('dql' => $dql), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'createQueryBuilder', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'flush', array('entity' => $entity), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'clear', array('entityName' => $entityName), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->clear($entityName);
    }

    public function close()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'close', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->close();
    }

    public function persist($entity)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'persist', array('entity' => $entity), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'remove', array('entity' => $entity), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'refresh', array('entity' => $entity), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'detach', array('entity' => $entity), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'merge', array('entity' => $entity), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'contains', array('entity' => $entity), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getEventManager', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getConfiguration', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'isOpen', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getUnitOfWork', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getProxyFactory', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'getFilters', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'isFiltersStateClean', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'hasFilters', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return $this->valueHolder66da2->hasFilters();
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

        $instance->initializerb1771 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder66da2) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder66da2 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder66da2->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, '__get', ['name' => $name], $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        if (isset(self::$publicPropertiese4a6d[$name])) {
            return $this->valueHolder66da2->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66da2;

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

        $targetObject = $this->valueHolder66da2;
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
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66da2;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66da2;
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
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, '__isset', array('name' => $name), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66da2;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder66da2;
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
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, '__unset', array('name' => $name), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66da2;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder66da2;
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
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, '__clone', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        $this->valueHolder66da2 = clone $this->valueHolder66da2;
    }

    public function __sleep()
    {
        $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, '__sleep', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;

        return array('valueHolder66da2');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1771 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1771;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb1771 && ($this->initializerb1771->__invoke($valueHolder66da2, $this, 'initializeProxy', array(), $this->initializerb1771) || 1) && $this->valueHolder66da2 = $valueHolder66da2;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder66da2;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder66da2;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
