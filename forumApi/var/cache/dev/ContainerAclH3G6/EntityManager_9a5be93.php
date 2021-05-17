<?php

namespace ContainerAclH3G6;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6bf1a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc7f8c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties353d1 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getConnection', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getMetadataFactory', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getExpressionBuilder', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'beginTransaction', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getCache', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'transactional', array('func' => $func), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->transactional($func);
    }

    public function commit()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'commit', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->commit();
    }

    public function rollback()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'rollback', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getClassMetadata', array('className' => $className), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'createQuery', array('dql' => $dql), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'createNamedQuery', array('name' => $name), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'createQueryBuilder', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'flush', array('entity' => $entity), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'clear', array('entityName' => $entityName), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->clear($entityName);
    }

    public function close()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'close', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->close();
    }

    public function persist($entity)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'persist', array('entity' => $entity), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'remove', array('entity' => $entity), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'refresh', array('entity' => $entity), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'detach', array('entity' => $entity), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'merge', array('entity' => $entity), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'contains', array('entity' => $entity), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getEventManager', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getConfiguration', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'isOpen', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getUnitOfWork', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getProxyFactory', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'initializeObject', array('obj' => $obj), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'getFilters', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'isFiltersStateClean', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'hasFilters', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return $this->valueHolder6bf1a->hasFilters();
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

        $instance->initializerc7f8c = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6bf1a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6bf1a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6bf1a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, '__get', ['name' => $name], $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        if (isset(self::$publicProperties353d1[$name])) {
            return $this->valueHolder6bf1a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bf1a;

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

        $targetObject = $this->valueHolder6bf1a;
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
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bf1a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6bf1a;
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
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, '__isset', array('name' => $name), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bf1a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6bf1a;
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
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, '__unset', array('name' => $name), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6bf1a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6bf1a;
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
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, '__clone', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        $this->valueHolder6bf1a = clone $this->valueHolder6bf1a;
    }

    public function __sleep()
    {
        $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, '__sleep', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;

        return array('valueHolder6bf1a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc7f8c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc7f8c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc7f8c && ($this->initializerc7f8c->__invoke($valueHolder6bf1a, $this, 'initializeProxy', array(), $this->initializerc7f8c) || 1) && $this->valueHolder6bf1a = $valueHolder6bf1a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6bf1a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6bf1a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
