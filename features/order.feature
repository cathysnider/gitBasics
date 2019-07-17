Feature: Ordering products
  In order to buy products
  As a customer
  I need to be able to fill out a form
  
Scenario: Filling out the order form
    Given I am on "orderform.html"
    And I fill in "tireqty" with "3"
    And I fill in "oilqty" with "4"
    And I fill in "sparkqty" with "1"
    And I press "Submit Order"
    Then I should see "Order Processed!"