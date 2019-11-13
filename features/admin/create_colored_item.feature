@colored_product
Feature:
  In order to present and manage product's color
  As an Administrator
  I want to create a colored item

  Background:
    Given I am logged in as an administrator
    And the store operates on a single channel in "United States"

  Scenario: Adding colored product
    When I go to the product creation page
    And create a sample product with color "red"
    Then I should be notified that the product has been successfully added
