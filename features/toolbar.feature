@javascript
Feature: Toolbar
  In order to have confidence that WordHat is reliable for developers
  As a WordHat maintainer
  I want to test interacting with the toolbar

  Background:
    Given I am logged in as an administrator
    And I am on the homepage

  Scenario: I can add a new page
    When I follow the toolbar link "New > Page"
    Then I should be on the "Add New Page" screen

  Scenario: I can search for text within the toolbar
    Given I am logged in as an administrator
    And I am on the homepage
    Then I should see "Howdy, admin" in the Toolbar
