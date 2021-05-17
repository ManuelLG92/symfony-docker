<?php

namespace ContainerK55oh1S;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdfef7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1f8b8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties8411e = [
        
    ];

    public function getConnection()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getConnection', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getMetadataFactory', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getExpressionBuilder', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'beginTransaction', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getCache', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'transactional', array('func' => $func), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->transactional($func);
    }

    public function commit()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'commit', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->commit();
    }

    public function rollback()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'rollback', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getClassMetadata', array('className' => $className), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'createQuery', array('dql' => $dql), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'createNamedQuery', array('name' => $name), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'createQueryBuilder', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'flush', array('entity' => $entity), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'clear', array('entityName' => $entityName), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->clear($entityName);
    }

    public function close()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'close', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->close();
    }

    public function persist($entity)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'persist', array('entity' => $entity), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'remove', array('entity' => $entity), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'refresh', array('entity' => $entity), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'detach', array('entity' => $entity), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'merge', array('entity' => $entity), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'contains', array('entity' => $entity), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getEventManager', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getConfiguration', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'isOpen', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getUnitOfWork', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getProxyFactory', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'initializeObject', array('obj' => $obj), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'getFilters', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'isFiltersStateClean', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'hasFilters', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return $this->valueHolderdfef7->hasFilters();
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

        $instance->initializer1f8b8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdfef7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdfef7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdfef7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, '__get', ['name' => $name], $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        if (isset(self::$publicProperties8411e[$name])) {
            return $this->valueHolderdfef7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfef7;

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

        $targetObject = $this->valueHolderdfef7;
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
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfef7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdfef7;
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
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, '__isset', array('name' => $name), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfef7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdfef7;
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
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, '__unset', array('name' => $name), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdfef7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdfef7;
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
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, '__clone', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        $this->valueHolderdfef7 = clone $this->valueHolderdfef7;
    }

    public function __sleep()
    {
        $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, '__sleep', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;

        return array('valueHolderdfef7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1f8b8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1f8b8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1f8b8 && ($this->initializer1f8b8->__invoke($valueHolderdfef7, $this, 'initializeProxy', array(), $this->initializer1f8b8) || 1) && $this->valueHolderdfef7 = $valueHolderdfef7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdfef7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdfef7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
