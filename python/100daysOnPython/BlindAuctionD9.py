from AuctionLogoD9 import logo

print(logo)

bids = {}
bidding_finished = False


def find_highest_bidder(bidding_record):
    highest_bid = 0
    winner = ""
    for bidder in bidding_record:
        bid_amount = bidding_record[bidder]
        if bid_amount > highest_bid:
            highest_bid = bid_amount
            winner = bidder
    print(f"The winner is {winner} with a bid of ${highest_bid}")


while not bidding_finished:
    name = input("Please, enter your name?: ")
    price = int(input("What`s your bid?: $"))
    bids[name] = price
    should_continue = input("Are there any other participants? Type 'Yes' or 'No'.\n").lower()
    if should_continue == "no":
        bidding_finished = True
        find_highest_bidder(bids)
# NOTE: For Example:
# programming_dictionary = {"Function": "A piece of code that you can easily call over and over again."}
#
# Adding new items to dictionary.
# programming_dictionary["Loops"] = "The action of doing something over and over again"
#
#  Edit an item in a dictionary
# programming_dictionary["Bug"] = "A moth in your computer"
# print(programming_dictionary)
#
# for key in programming_dictionary:
#     print(key)

# NOTE: For example 2
# travel_log = [
#     {
#         "country": "France",
#         "visits": 12,
#         "cities": ["Paris", "Lille", "Dijon"]
#     },
#     {
#         "country": "Germany",
#         "visits": 5,
#         "cities": ["Berlin", "Hamburg", "Stuttgart"]
#     },
# ]
# def add_new_country(country_visited, times_visited, cities_visited):
#     new_country = {"country": country_visited, "visits": times_visited, "cities": cities_visited}
#     travel_log.append(new_country)
#
#
# add_new_country("Russia", 2, ["Moscow", "Saint Petersburg"])
# print(travel_log)
