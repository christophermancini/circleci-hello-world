Feature: Big button
  In order to find out the best CICD service
  As a user
  I need to be able to click the big button

  Scenario: Test Click
    Given I am on "/"
    And I click the "#the_button" button - to reveal a hidden element
    Then I should see an ".alert-success" element
    And "#message" element should contain "CircleCI"
