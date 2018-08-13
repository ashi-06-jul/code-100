n=int(input("Enter the number of element to be inserted"))
a=[]
for i in range(0,n):
    elem=int(input("Enter elements: "))
    a.append(elem)
avg=sum(a)/n
print("Average of element",round(avg,2))
  
  
