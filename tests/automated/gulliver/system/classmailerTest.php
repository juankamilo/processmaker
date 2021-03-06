<?php
require_once PATH_TRUNK . 'gulliver/thirdparty/smarty/libs/Smarty.class.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlform.php';
require_once PATH_TRUNK . 'gulliver/system/class.xmlDocument.php';
require_once PATH_TRUNK . 'gulliver/system/class.form.php';
require_once PATH_TRUNK . 'gulliver/system/class.dbconnection.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/propel/Propel.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/creole/Creole.php';
require_once PATH_TRUNK . 'gulliver/thirdparty/pear/PEAR.php';
require_once PATH_TRUNK . 'gulliver/system/class.mailer.php';

/**
 * Generated by ProcessMaker Test Unit Generator on 2012-07-12 at 22:32:22.
*/

class classmailerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var mailer
    */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
    */
    protected function setUp()
    {
        $this->object = new mailer();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
    */
    protected function tearDown()
    {
    }

    /**
     * This is the default method to test, if the class still having
     * the same number of methods.
    */
    public function testNumberOfMethodsInThisClass()
    {
        $methods = get_class_methods('mailer');        $this->assertTrue( count($methods) == 7);
    }

    /**
    * @covers mailer::instanceMailer
    * @todo   Implement testinstanceMailer().
    */
    public function testinstanceMailer()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('instanceMailer', $methods ), 'exists method instanceMailer' );
        $r = new ReflectionMethod('mailer', 'instanceMailer');
        $params = $r->getParameters();
    }

    /**
    * @covers mailer::arpaEMAIL
    * @todo   Implement testarpaEMAIL().
    */
    public function testarpaEMAIL()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('arpaEMAIL', $methods ), 'exists method arpaEMAIL' );
        $r = new ReflectionMethod('mailer', 'arpaEMAIL');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'address');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == false);
    }

    /**
    * @covers mailer::sendTemplate
    * @todo   Implement testsendTemplate().
    */
    public function testsendTemplate()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('sendTemplate', $methods ), 'exists method sendTemplate' );
        $r = new ReflectionMethod('mailer', 'sendTemplate');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'from');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'target');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'cc');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'bcc');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'subject');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'Fields');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == Array());
        $this->assertTrue( $params[6]->getName() == 'templateFile');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == true);
        $this->assertTrue( $params[6]->getDefaultValue() == 'empty.html');
        $this->assertTrue( $params[7]->getName() == 'attachs');
        $this->assertTrue( $params[7]->isArray() == false);
        $this->assertTrue( $params[7]->isOptional () == true);
        $this->assertTrue( $params[7]->getDefaultValue() == Array());
        $this->assertTrue( $params[8]->getName() == 'plainText');
        $this->assertTrue( $params[8]->isArray() == false);
        $this->assertTrue( $params[8]->isOptional () == true);
        $this->assertTrue( $params[8]->getDefaultValue() == '');
        $this->assertTrue( $params[9]->getName() == 'returnContent');
        $this->assertTrue( $params[9]->isArray() == false);
        $this->assertTrue( $params[9]->isOptional () == true);
        $this->assertTrue( $params[9]->getDefaultValue() == '');
    }

    /**
    * @covers mailer::sendHtml
    * @todo   Implement testsendHtml().
    */
    public function testsendHtml()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('sendHtml', $methods ), 'exists method sendHtml' );
        $r = new ReflectionMethod('mailer', 'sendHtml');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'from');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'target');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'cc');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'bcc');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'subject');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'Fields');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == Array());
        $this->assertTrue( $params[6]->getName() == 'content');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == true);
        $this->assertTrue( $params[6]->getDefaultValue() == '');
        $this->assertTrue( $params[7]->getName() == 'attachs');
        $this->assertTrue( $params[7]->isArray() == false);
        $this->assertTrue( $params[7]->isOptional () == true);
        $this->assertTrue( $params[7]->getDefaultValue() == Array());
        $this->assertTrue( $params[8]->getName() == 'plainText');
        $this->assertTrue( $params[8]->isArray() == false);
        $this->assertTrue( $params[8]->isOptional () == true);
        $this->assertTrue( $params[8]->getDefaultValue() == '');
        $this->assertTrue( $params[9]->getName() == 'returnContent');
        $this->assertTrue( $params[9]->isArray() == false);
        $this->assertTrue( $params[9]->isOptional () == true);
        $this->assertTrue( $params[9]->getDefaultValue() == '');
    }

    /**
    * @covers mailer::sendText
    * @todo   Implement testsendText().
    */
    public function testsendText()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('sendText', $methods ), 'exists method sendText' );
        $r = new ReflectionMethod('mailer', 'sendText');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'from');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == '');
        $this->assertTrue( $params[1]->getName() == 'target');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
        $this->assertTrue( $params[2]->getName() == 'cc');
        $this->assertTrue( $params[2]->isArray() == false);
        $this->assertTrue( $params[2]->isOptional () == true);
        $this->assertTrue( $params[2]->getDefaultValue() == '');
        $this->assertTrue( $params[3]->getName() == 'bcc');
        $this->assertTrue( $params[3]->isArray() == false);
        $this->assertTrue( $params[3]->isOptional () == true);
        $this->assertTrue( $params[3]->getDefaultValue() == '');
        $this->assertTrue( $params[4]->getName() == 'subject');
        $this->assertTrue( $params[4]->isArray() == false);
        $this->assertTrue( $params[4]->isOptional () == true);
        $this->assertTrue( $params[4]->getDefaultValue() == '');
        $this->assertTrue( $params[5]->getName() == 'content');
        $this->assertTrue( $params[5]->isArray() == false);
        $this->assertTrue( $params[5]->isOptional () == true);
        $this->assertTrue( $params[5]->getDefaultValue() == '');
        $this->assertTrue( $params[6]->getName() == 'attachs');
        $this->assertTrue( $params[6]->isArray() == false);
        $this->assertTrue( $params[6]->isOptional () == true);
        $this->assertTrue( $params[6]->getDefaultValue() == Array());
    }

    /**
    * @covers mailer::replaceFields
    * @todo   Implement testreplaceFields().
    */
    public function testreplaceFields()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('replaceFields', $methods ), 'exists method replaceFields' );
        $r = new ReflectionMethod('mailer', 'replaceFields');
        $params = $r->getParameters();
        $this->assertTrue( $params[0]->getName() == 'Fields');
        $this->assertTrue( $params[0]->isArray() == false);
        $this->assertTrue( $params[0]->isOptional () == true);
        $this->assertTrue( $params[0]->getDefaultValue() == Array());
        $this->assertTrue( $params[1]->getName() == 'content');
        $this->assertTrue( $params[1]->isArray() == false);
        $this->assertTrue( $params[1]->isOptional () == true);
        $this->assertTrue( $params[1]->getDefaultValue() == '');
    }

    /**
    * @covers mailer::html2text
    * @todo   Implement testhtml2text().
    */
    public function testhtml2text()
    {
        $methods = get_class_methods($this->object);
        $this->assertTrue( in_array('html2text', $methods ), 'exists method html2text' );
        $r = new ReflectionMethod('mailer', 'html2text');
        $params = $r->getParameters();
    }

  }
