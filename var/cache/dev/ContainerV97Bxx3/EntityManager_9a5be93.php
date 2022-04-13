<?php

namespace ContainerV97Bxx3;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere3c86 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer43c87 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd512f = [
        
    ];

    public function getConnection()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getConnection', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getMetadataFactory', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getExpressionBuilder', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'beginTransaction', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getCache', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getCache();
    }

    public function transactional($func)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'transactional', array('func' => $func), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'wrapInTransaction', array('func' => $func), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'commit', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->commit();
    }

    public function rollback()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'rollback', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getClassMetadata', array('className' => $className), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'createQuery', array('dql' => $dql), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'createNamedQuery', array('name' => $name), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'createQueryBuilder', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'flush', array('entity' => $entity), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'clear', array('entityName' => $entityName), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->clear($entityName);
    }

    public function close()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'close', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->close();
    }

    public function persist($entity)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'persist', array('entity' => $entity), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'remove', array('entity' => $entity), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'refresh', array('entity' => $entity), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'detach', array('entity' => $entity), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'merge', array('entity' => $entity), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getRepository', array('entityName' => $entityName), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'contains', array('entity' => $entity), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getEventManager', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getConfiguration', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'isOpen', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getUnitOfWork', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getProxyFactory', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'initializeObject', array('obj' => $obj), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'getFilters', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'isFiltersStateClean', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'hasFilters', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return $this->valueHoldere3c86->hasFilters();
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

        $instance->initializer43c87 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere3c86) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere3c86 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere3c86->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, '__get', ['name' => $name], $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        if (isset(self::$publicPropertiesd512f[$name])) {
            return $this->valueHoldere3c86->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3c86;

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

        $targetObject = $this->valueHoldere3c86;
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
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3c86;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere3c86;
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
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, '__isset', array('name' => $name), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3c86;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere3c86;
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
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, '__unset', array('name' => $name), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere3c86;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere3c86;
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
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, '__clone', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        $this->valueHoldere3c86 = clone $this->valueHoldere3c86;
    }

    public function __sleep()
    {
        $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, '__sleep', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;

        return array('valueHoldere3c86');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer43c87 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer43c87;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer43c87 && ($this->initializer43c87->__invoke($valueHoldere3c86, $this, 'initializeProxy', array(), $this->initializer43c87) || 1) && $this->valueHoldere3c86 = $valueHoldere3c86;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere3c86;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere3c86;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
