<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I go to :arg1
     */
    public function iGoTo($arg1)
    {
        $this->iAmOnHomepage();
        $this->assertPageContainsText('CircleCI Hello World');
        $this->assertPageContainsText('Welcome!');
    }

    /**
     * @Given I click the :arg1 button - to reveal a hidden element
     */
    public function iClickTheButtonToRevealAHiddenElement($arg1)
    {
        $this->assertElementOnPage($arg1);
        $this->assertElementContainsText($arg1, 'Find out now!');
        $this->clickLink(substr($arg1, 1));
    }

    /**
     * @Then I should see an :arg1 element
     */
    public function iShouldSeeAnElement($arg1)
    {
        $this->assertElementOnPage($arg1);
    }

    /**
     * @Then :arg1 element should contain :arg2
     */
    public function elementShouldContain($arg1, $arg2)
    {
        $this->assertElementContainsText($arg1, $arg2);
    }
}
